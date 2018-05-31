<?php
/**
 * Created by PhpStorm.
 * User: ihorkruchynenko
 * Date: 18/05/2018
 * Time: 20:55
 */

namespace App\Controller;

use League\Csv\Reader;
use League\Csv\Statement;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;
use App\Form\loginType;
use App\Form\uploadTypeUK;
use App\Entity\ukdata;
use App\Entity\upload;
use DateTime;
use Prewk\XmlStringStreamer;
use Prewk\XmlStringStreamer\Stream;
use Prewk\XmlStringStreamer\Parser;
use DOMDocument;
use SoapClient;
use SimpleXMLElement;

class adminController extends Controller {
    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();
        // creating login userform
        $newLogin = new User();
        $form = $this->createForm(loginType::class, $newLogin, [
            'action' => $this -> generateUrl('login'),
            'method' => 'POST'
        ]);
        $form->handleRequest($request);

        return $this->render('login.html.twig',[
            'form'=>$form->createView(),
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * @Route("/{_locale}/admin", name="admin")
     * @param Request $request
     * @return Response
     */
    public function adminAction (Request $request) {
        $locale = $request->getLocale();
        $newUpload = new upload();
        $em = $this ->getDoctrine() ->getManager();
        $form = $this->createForm(uploadTypeUK::class, $newUpload, [
            'action' => $this -> generateUrl('admin'),
            'method' => 'POST'
        ]);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $file = $newUpload->getFile();
            $csv = Reader::createFromPath($file,'r')
                ->setHeaderOffset(0)
            ;
            $stmt = (new Statement())
                ->offset(0)
            ;
            $records = $stmt->process($csv);
            foreach ($records as $record) {
                $newUKload = (new Ukdata())
                    ->setAccountid($record['AccountID7'])
                    ->setAccountidUi8($record['AccountID_UI8'])
                    ->setCustomernumber7($record['CustomerNumber7'])
                    ->setAccountname7($record['AccountName7'])
                    ->setRegistrationnumber7($record['RegistrationNumber7'])
                    ->setBillingcountry7($record['BillingCountry7'])
                    ->setBillingstateprovince7($record['BillingStateProvince7'])
                    ->setBillingcity7($record['BillingCity7'])
                    ->setBillingstreet7($record['BillingStreet7'])
                    ->setBillingzippostalcode7($record['BillingZipPostalCode7'])
                    ->setVatnumber7($record['VATNumber7'])
                    ->setAccountphone7($record['AccountPhone7'])
                    ->setDateadded(new DateTime())
                ;
                $em->persist($newUKload);
                $em->flush();
            }

        }

        return $this->render('admin.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/convert", name="convert")
     * @param Request $request
     * @return Response
     */
    public function convertImageAction (Request $request) {
        $rootdir = getcwd();
        $roordirm = $rootdir . '/working/input/';
        $i = 0;

        $files = scandir($roordirm);
        foreach($files as $file) {
            if ($i > 1) {
                //getting file names right
                $path_parts = pathinfo($file);
                $filename = $path_parts['filename'];
                $filenamef = $path_parts['basename'];
                $combpath = $roordirm . $filenamef;

                //PROCESSING SOAP RESPONCE
                    //attempt 2
                    $xml = file_get_contents($combpath);
                    $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $xml);
                    $xml2 = new SimpleXMLElement($response);
                    //$body = $xml2->xpath('//SBody')[0];
                    $array = json_decode(json_encode((array)$xml2), TRUE);
                    $base64img1 = $array['soapenvBody']['wsComparePhoto']['wsphotoBody1Base64'];
                    $base64img2 = $array['soapenvBody']['wsComparePhoto']['wsphotoBody2Base64'];

                // split the string on commas
                // $data[ 0 ] == "data:image/png;base64"
                // $data[ 1 ] == <actual base64 string>
                $image1 = explode( ',', $base64img1 );
                $image2 = explode( ',', $base64img2 );
                //reconding base 64 image into file
                file_put_contents($rootdir .'/working/output/' . $filename . '_1.jpeg' , base64_decode($image1[0]));
                file_put_contents($rootdir .'/working/output/' . $filename . '_2.jpeg' , base64_decode($image2[0]));
            }
            $i++;
        }
        return $this->render('convert.html.twig');
    }
}