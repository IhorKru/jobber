<?php

namespace App\Service;

use App\Controller\adminController;
use League\Csv\Reader;
use League\Csv\Statement;
use DateTime;
use App\Entity\bedata;

class csBEParserService extends adminController
{
    private $file;
    private $asofdate;

    public function beParser($file, $asofdate) 
    {
        $rootDir = getcwd();
        $em = $this ->getDoctrine() ->getManager();
        $em->getConnection()->getConfiguration()->setSQLLogger(null);
        $csv = Reader::createFromPath($file, 'r')
            ->setHeaderOffset(0)
        ;
        $stmt = (new Statement())
            ->offset(0)
        ;
        $records = $stmt ->process($csv);
        $i = 0;
        foreach ($records as $record) {
            $newBEload = ( new BEdata() )
                ->setAccountid($record['AccountID'])
                ->setAccountuid($record['AccountID_UI'])
                ->setCustomernumber($record['CustomerNumber'])
                ->setAccountname($record['AccountName'])
                ->setRegistrationnumber($record['RegistrationNumber'])
                ->setBillingcountry($record['BillingCountry'])
                ->setBillingstateprovince($record['BillingStateProvince'])
                ->setBillingcity($record['BillingCity'])
                ->setBillingstreet($record['BillingStreet'])
                ->setBillingzippostalcode($record['BillingZipPostalCode'])
                ->setVatnumber($record['VATNumber'])
                ->setAccountphone($record['AccountPhone'])
                ->setFirstname($record['FirstName'])
                ->setMiddlename($record['MiddleName'])
                ->setLastname($record['LastName'])
                ->setPrimaryemailupdated($record['PrimaryEmailUpdated'])
                ->setWorkphone($record['WorkPhone'])
                ->setDcGgsId($record['DC_GGS_ID'])
                ->setDcSafeNumber($record['DC_SAFE_NUMBER'])
                ->setDcCompanyNumber($record['DC_COMPANY_NUMBER'])
                ->setDcBwtNumber($record['DC_BWT_NUMBER'])
                ->setDcCompanyName($record['DC_COMPANY_NAME'])
                ->setDcStreet($record['DC_STREET'])
                ->setDcHouseNo($record['DC_HOUSE_NO'])
                ->setDcHouseNoExt($record['DC_HOUSE_NO_EXT'])
                ->setDcCityFr($record['DC_CITY_FR'])
                ->setDcCityDu($record['DC_CITY_DU'])
                ->setDcPostcode($record['DC_POSTCODE'])
                ->setDcTradStreet($record['DC_TRAD_STREET'])
                ->setDcTradHouseNo($record['DC_TRAD_HOUSE_NO'])
                ->setDcTradHouseNoExt($record['DC_TRAD_HOUSE_NO_EXT'])
                ->setDcTradCityFr($record['DC_TRAD_CITY_FR'])
                ->setDcTradCityDu($record['DC_TRAD_CITY_DU'])
                ->setDcTradPostcode($record['DC_TRAD_POSTCODE'])
                ->setDcTelephone($record['DC_TELEPHONE'])
                ->setDcFax($record['DC_FAX'])
                ->setDcCompanyTypeEn($record['DC_COMPANY_TYPE_EN'])
                ->setDcCompanyTypeFr($record['DC_COMPANY_TYPE_FR'])
                ->setDcCompanyTypeDu($record['DC_COMPANY_TYPE_DU'])
                ->setDcIncDate($record['DC_INC_DATE'])
                ->setDcNaceCode($record['DC_NACE_CODE'])
                ->setDcNaceDescEn($record['DC_NACE_DESC_EN'])
                ->setDcNaceDescFr($record['DC_NACE_DESC_FR'])
                ->setDcNaceDescDu($record['DC_NACE_DESC_DU'])
                ->setDcEmployees($record['DC_EMPLOYEES'])
                ->setDcInactivityCode($record['DC_INACTIVITY_CODE'])
                ->setDcInactivityDescEn($record['DC_INACTIVITY_DESC_EN'])
                ->setDcInactivityDescFr($record['DC_INACTIVITY_DESC_FR'])
                ->setDcInactivityDescDu($record['DC_INACTIVITY_DESC_DU'])
                ->setDcEndDate($record['DC_END_DATE'])
                ->setDcTurnover($record['DC_TURNOVER'])
                ->setDcTotalOperatingExpenses($record['DC_TOTAL_OPERATING_EXPENSES'])
                ->setDcOperatingProfit($record['DC_OPERATING_PROFIT'])
                ->setDcTotalFinancialIncome($record['DC_TOTAL_FINANCIAL_INCOME'])
                ->setDcTotalFinancialExpenses($record['DC_TOTAL_FINANCIAL_EXPENSES'])
                ->setDcResultOnOrdOpsPreTax($record['DC_RESULT_ON_ORD_OPS_PRE_TAX'])
                ->setDcTaxationPandl($record['DC_TAXATION_PANDL'])
                ->setDcResultOnOrdOpsPostTax($record['DC_RESULT_ON_ORD_OPS_POST_TAX'])
                ->setDcExtraordinaryItems($record['DC_EXTRAORDINARY_ITEMS'])
                ->setDcNetResult($record['DC_NET_RESULT'])
                ->setDcDividends($record['DC_DIVIDENDS'])
                ->setDcDirectorsRemuneration($record['DC_DIRECTORS_REMUNERATION'])
                ->setDcEmployeeCosts($record['DC_EMPLOYEE_COSTS'])
                ->setDcWagesAndSalaries($record['DC_WAGES_AND_SALARIES'])
                ->setDcEmployeePensionCosts($record['DC_EMPLOYEE_PENSION_COSTS'])
                ->setDcSocialSecurityContributions($record['DC_SOCIAL_SECURITY_CONTRIBUTIONS'])
                ->setDcOtherEmployeeCosts($record['DC_OTHER_EMPLOYEE_COSTS'])
                ->setDcDepreciationAndAmortisation($record['DC_DEPRECIATION_AND_AMORTISATION'])
                ->setDcLiableForVat($record['DC_LIABLE_FOR_VAT'])
                ->setDcBankruptcyFlag($record['DC_BANKRUPTCY_FLAG'])
                ->setDcIntangibleFixedAssets($record['DC_INTANGIBLE_FIXED_ASSETS'])
                ->setDcTangibleFixedAssets($record['DC_TANGIBLE_FIXED_ASSETS'])
                ->setDcLandAndBuildings($record['DC_LAND_AND_BUILDINGS'])
                ->setDcPlantAndMachinery($record['DC_PLANT_AND_MACHINERY'])
                ->setDcOtherTangibleFixedAssets($record['DC_OTHER_TANGIBLE_FIXED_ASSETS'])
                ->setDcFinancialFixedAssets($record['DC_FINANCIAL_FIXED_ASSETS'])
                ->setDcTotalFixedAssets($record['DC_TOTAL_FIXED_ASSETS'])
                ->setDcIventories($record['DC_IVENTORIES'])
                ->setDcRawMaterialsAndConsumables($record['DC_RAW_MATERIALS_AND_CONSUMABLES'])
                ->setDcWorkInProgress($record['DC_WORK_IN_PROGRESS'])
                ->setDcFinishedGoods($record['DC_FINISHED_GOODS'])
                ->setDcOtherStocks($record['DC_OTHER_STOCKS'])
                ->setDcTradeDebtors($record['DC_TRADE_DEBTORS'])
                ->setDcCash($record['DC_CASH'])
                ->setDcOtherAmountsReceivable($record['DC_OTHER_AMOUNTS_RECEIVABLE'])
                ->setDcMiscellanousCurrentAssets($record['DC_MISCELLANOUS_CURRENT_ASSETS'])
                ->setDcTotalCurrentAssets($record['DC_TOTAL_CURRENT_ASSETS'])
                ->setDcTradeCreditors($record['DC_TRADE_CREDITORS'])
                ->setDcShortTermGroupLoans($record['DC_SHORT_TERM_GROUP_LOANS'])
                ->setDcOtherShortTermLoans($record['DC_OTHER_SHORT_TERM_LOANS'])
                ->setDcMiscellaneousCurrentLiabilit($record['DC_MISCELLANEOUS_CURRENT_LIABILIT'])
                ->setDcTotalCurrentLiabilities($record['DC_TOTAL_CURRENT_LIABILITIES'])
                ->setDcLongTermGroupLoans($record['DC_LONG_TERM_GROUP_LOANS'])
                ->setDcOtherLongTermLoans($record['DC_OTHER_LONG_TERM_LOANS'])
                ->setDcOtherLongTermLiabilities($record['DC_OTHER_LONG_TERM_LIABILITIES'])
                ->setDcTotalLongTermDebts($record['DC_TOTAL_LONG_TERM_DEBTS'])
                ->setDcIssuedShareCapital($record['DC_ISSUED_SHARE_CAPITAL'])
                ->setDcSharePremiumAccount($record['DC_SHARE_PREMIUM_ACCOUNT'])
                ->setDcRevenueReserves($record['DC_REVENUE_RESERVES'])
                ->setDcRevaluationReserve($record['DC_REVALUATION_RESERVE'])
                ->setDcShareholdersEquity($record['DC_SHAREHOLDERS_EQUITY'])
                ->setDcWorkingCapital($record['DC_WORKING_CAPITAL'])
                ->setDcNetWorth($record['DC_NET_WORTH'])
                ->setDcTotalLiabilities($record['DC_TOTAL_LIABILITIES'])
                ->setDcTotalAssets($record['DC_TOTAL_ASSETS'])
                ->setDcPreTaxProfitMargin($record['DC_PRE_TAX_PROFIT_MARGIN'])
                ->setDcReturnOnCapitalEmployed($record['DC_RETURN_ON_CAPITAL_EMPLOYED'])
                ->setDcReturnOnTotalAssetsEmp($record['DC_RETURN_ON_TOTAL_ASSETS_EMP'])
                ->setDcReturnOnNetAssetsEmployed($record['DC_RETURN_ON_NET_ASSETS_EMPLOYED'])
                ->setDcSalesNetWorkingCapital($record['DC_SALES_NET_WORKING_CAPITAL'])
                ->setDcStockTurnoverRatio($record['DC_STOCK_TURNOVER_RATIO'])
                ->setDcDebtorDays($record['DC_DEBTOR_DAYS'])
                ->setDcCreditorDays($record['DC_CREDITOR_DAYS'])
                ->setDcCurrentRatio($record['DC_CURRENT_RATIO'])
                ->setDcLiquidityRatio($record['DC_LIQUIDITY_RATIO'])
                ->setDcCurrentDebtRatio($record['DC_CURRENT_DEBT_RATIO'])
                ->setDcRestrictedLiquidity($record['DC_RESTRICTED_LIQUIDITY'])
                ->setDcGearing($record['DC_GEARING'])
                ->setDcEquityInPercentage($record['DC_EQUITY_IN_PERCENTAGE'])
                ->setDcTotalDebtRatio($record['DC_TOTAL_DEBT_RATIO'])
                ->setDcPbBillsCount($record['DC_PB_BILLS_COUNT'])
                ->setDcPbBillsValue($record['DC_PB_BILLS_VALUE'])
                ->setDcNssoCount($record['DC_NSSO_COUNT'])
                ->setDcCreditLimitValue($record['DC_CREDIT_LIMIT_VALUE'])
                ->setDcCreditRatingNumeric($record['DC_CREDIT_RATING_NUMERIC'])
                ->setDcRatingTextEn($record['DC_RATING_TEXT_EN'])
                ->setDcRatingTextFr($record['DC_RATING_TEXT_FR'])
                ->setDcRatingTextDu($record['DC_RATING_TEXT_DU'])
                ->setDcRatingFullTextEn($record['DC_RATING_FULL_TEXT_EN'])
                ->setDcRatingFullTextFr($record['DC_RATING_FULL_TEXT_FR'])
                ->setDcRatingFullTextDu($record['DC_RATING_FULL_TEXT_DU'])
                ->setDcRatingColorEn($record['DC_RATING_COLOR_EN'])
                ->setDcRatingColorFr($record['DC_RATING_COLOR_FR'])
                ->setDcRatingColorDu($record['DC_RATING_COLOR_DU'])
                ->setDcInternationalScore($record['DC_INTERNATIONAL_SCORE'])
                ->setDcContactForename($record['DC_CONTACT_FORENAME'])
                ->setDcContactSurname($record['DC_CONTACT_SURNAME'])
                ->setDcContactPositionEn($record['DC_CONTACT_POSITION_EN'])
                ->setDcContactPositionFr($record['DC_CONTACT_POSITION_FR'])
                ->setDcContactPositionDu($record['DC_CONTACT_POSITION_DU'])
                ->setDcContactDob($record['DC_CONTACT_DOB'])
                ->setBtsCoIsDuplicate($record['BTS_CO_IS_DUPLICATE'])
                ->setAlgorythm($record['ALGORYTHM'])
                ->setDateadded(new DateTime())
                ->setAsoffdate(DateTime::createFromFormat('Y-m-d H:i:s', $asofdate))
            ;
            $em ->persist($newBEload);
            if ($i == 200) {
                $em ->flush($newBEload);
                $em ->clear();
                $i = 0;
            } else {
                $i = $i + 1;
            }
        }
        $em ->flush($newBEload);
        $em ->clear();
    }
}