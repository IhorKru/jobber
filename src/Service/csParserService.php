<?php
/**
 * Created by PhpStorm.
 * User: ihorkruchynenko
 * Date: 23/06/2018
 * Time: 22:48
 */

namespace App\Service;

use App\Controller\adminController;
use League\Csv\Reader;
use League\Csv\Statement;
use DateTime;
use App\Entity\ukdata;

class csParserService extends adminController
{

    public function ukParser($file, $asofdate) {
        $rootDir = getcwd();
        $em = $this ->getDoctrine() ->getManager();
        $em->getConnection()->getConfiguration()->setSQLLogger(null);
        $file = $rootDir . '/public/source/pre_approval_data_gb_march_18.csv';
        $csv = Reader::createFromPath($file,'r')
            ->setHeaderOffset(0)
        ;
        $stmt = (new Statement())
            ->offset(0)
        ;
        $records = $stmt ->process($csv);
        $i = 0;
        foreach($records as $record) {
            $newUKload = ( new Ukdata() )
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
                ->setFirstname7($record['FirstName7'])
                ->setMiddlename7($record['MiddleName7'])
                ->setLastname7($record['LastName7'])
                ->setPrimaryemailupdated7($record['PrimaryEmailUpdated7'])
                ->setWorkphone7($record['WorkPhone7'])
                ->setAlgorythm($record['ALGORYTHM'])
                ->setTradNum($record['TRAD_NUM'])
                ->setDcRegNum($record['DC_REG_NUM'])
                ->setDcSafeNumber($record['DC_SAFE_NUMBER'])
                ->setDcGgsId($record['DC_GGS_ID'])
                ->setDcCoName($record['DC_CO_NAME'])
                ->setDcAddress1($record['DC_ADDRESS1'])
                ->setDcAddress2($record['DC_ADDRESS2'])
                ->setDcAddress3($record['DC_ADDRESS3'])
                ->setDcAddress4($record['DC_ADDRESS4'])
                ->setDcPostcode($record['DC_POSTCODE'])
                ->setRegisteredNumber($record['REGISTERED NUMBER'])
                ->setTradName($record['TRAD_NAME'])
                ->setTradAddress1($record['TRAD_ADDRESS1'])
                ->setTradAddress2($record['TRAD_ADDRESS2'])
                ->setTradAddress3($record['TRAD_ADDRESS3'])
                ->setTradAddress4($record['TRAD_ADDRESS4'])
                ->setTradPostcode($record['TRAD_POSTCODE'])
                ->setDcPafDept($record['DC_PAF_DEPT'])
                ->setDcPafPobox($record['DC_PAF_POBOX'])
                ->setDcPafAdd1($record['DC_PAF_ADD1'])
                ->setDcPafAdd2($record['DC_PAF_ADD2'])
                ->setDcPafAdd3($record['DC_PAF_ADD3'])
                ->setDcPafAdd4($record['DC_PAF_ADD4'])
                ->setDcPafAdd5($record['DC_PAF_ADD5'])
                ->setDcPafAdd6($record['DC_PAF_ADD6'])
                ->setDcPafAdd7($record['DC_PAF_ADD7'])
                ->setDcPafTown($record['DC_PAF_TOWN'])
                ->setDcPafPc($record['DC_PAF_PC'])
                ->setDcYearsTrading($record['DC_YEARS_TRADING'])
                ->setDcNumEmployees($record['DC_NUM_EMPLOYEES'])
                ->setDcLtdNonltdFlag($record['DC_LTD_NONLTD_FLAG'])
                ->setDcSic2003($record['DC_SIC2003'])
                ->setDcSic2003Desc($record['DC_SIC2003_DESC'])
                ->setDcSic2007($record['DC_SIC2007'])
                ->setDcSic2007Desc($record['DC_SIC2007_DESC'])
                ->setDcIncorpDate($record['DC_INCORP_DATE'])
                ->setDcTpsFlag($record['DC_TPS_FLAG'])
                ->setDcPhone($record['DC_PHONE'])
                ->setDcFax($record['DC_FAX'])
                ->setDcUrl($record['DC_URL'])
                ->setDcIsActive($record['DC_IS_ACTIVE'])
                ->setDcCompanyForm($record['DC_COMPANY_FORM'])
                ->setDcContactTitle($record['DC_CONTACT_TITLE'])
                ->setDcContactFirstname($record['DC_CONTACT_FIRSTNAME'])
                ->setDcContactSurname($record['DC_CONTACT_SURNAME'])
                ->setDcContactDob($record['DC_CONTACT_DOB'])
                ->setDcContactOccupation($record['DC_CONTACT_OCCUPATION'])
                ->setDcNationality($record['DC_NATIONALITY'])
                ->setDcMultipleDirectors($record['DC_MULTIPLE_DIRECTORS'])
                ->setDcUltParentBin($record['DC_ULT_PARENT_BIN'])
                ->setDcUltParentBin($record['DC_ULT_PARENT_NAME'])
                ->setDcParentBin($record['DC_PARENT_BIN'])
                ->setDcParentName($record['DC_PARENT_NAME'])
                ->setDcCreditRating($record['DC_CREDIT_RATING'])
                ->setDcCreditLimit($record['DC_CREDIT_LIMIT'])
                ->setDcPrevCreditRating($record['DC_PREV_CREDIT_RATING'])
                ->setDcRatingDate($record['DC_RATING_DATE'])
                ->setDcLimitDate($record['DC_LIMIT_DATE'])
                ->setDcInternationalScore($record['DC_INTERNATIONAL_SCORE'])
                ->setDcEquityInPercent($record['DC_EQUITY_IN_PERCENT'])
                ->setDcCreditorDays($record['DC_CREDITOR_DAYS'])
                ->setDcLiquidAcidTest($record['DC_LIQUID_ACID_TEST'])
                ->setDcRetCapEmpPercent($record['DC_RET_CAP_EMP_PERCENT'])
                ->setDcRetTotalAssetsEmpPercent($record['DC_RET_TOTAL_ASSETS_EMP_PERCENT'])
                ->setDcCurrentDebtRatioPercent($record['DC_CURRENT_DEBT_RATIO_PERCENT'])
                ->setDcTotalDebtRatioPercent($record['DC_TOTAL_DEBT_RATIO_PERCENT'])
                ->setDcStockTurnoverRatioPercent($record['DC_STOCK_TURNOVER_RATIO_PERCENT'])
                ->setDcRetNetAssetsEmpPercent($record['DC_RET_NET_ASSETS_EMP_PERCENT'])
                ->setDcCurrentRatio($record['DC_CURRENT_RATIO'])
                ->setDcSalesNetWorkingCapital($record['DC_SALES_NET_WORKING_CAPITAL'])
                ->setDcGearingRatioPercent($record['DC_GEARING_RATIO_PERCENT'])
                ->setDcCcjCounts($record['DC_CCJ_COUNTS'])
                ->setDcCcjValue($record['DC_CCJ_VALUE'])
                ->setDcShareholders($record['DC_SHAREHOLDERS'])
                ->setDcPrincipleActivity($record['DC_PRINCIPLE_ACTIVITY'])
                ->setDcNetCashflowOps($record['DC_NET_CASHFLOW_OPS'])
                ->setDcNetCashflowBeforeFin($record['DC_NET_CASHFLOW_BEFORE_FIN'])
                ->setDcNetCashflowFromFin($record['DC_NET_CASHFLOW_FROM_FIN'])
                ->setDcContingentLiability($record['DC_CONTINGENT_LIABILITY'])
                ->setDcCapitalEmployed($record['DC_CAPITAL_EMPLOYED'])
                ->setDcAuditors($record['DC_AUDITORS'])
                ->setDcAuditorsQual($record['DC_AUDITORS_QUAL'])
                ->setDcbankers($record['DC_BANKERS'])
                ->setDcmtgoutstanding($record['DC_MTG_OUTSTANDING'])
                ->setDcmtgoutstandingtimestamp($record['DC_MTG_OUTSTANDING_TIMESTAMP'])
                ->setDcMtgSatisfied($record['DC_MTG_SATISFIED'])
                ->setDcMtgSatisfiedTimestamp($record['DC_MTG_SATISFIED_TIMESTAMP'])
                ->setDcMtgPartial($record['DC_MTG_PARTIAL'])
                ->setDcMtgPartialTimestamp($record['DC_MTG_PARTIAL_TIMESTAMP'])
                ->setDcTangibleAssets($record['DC_TANGIBLE_ASSETS'])
                ->setDcIntangibleAssets($record['DC_INTANGIBLE_ASSETS'])
                ->setDcTotalFixedAssets($record['DC_TOTAL_FIXED_ASSETS'])
                ->setDcTotalCurrentAssets($record['DC_TOTAL_CURRENT_ASSETS'])
                ->setDcTradeDebtors($record['DC_TRADE_DEBTORS'])
                ->setDcStocks($record['DC_STOCKS'])
                ->setDcCash($record['DC_CASH'])
                ->setDcOtherCurrentAssets($record['DC_OTHER_CURRENT_ASSETS'])
                ->setDcMiscCurrentAssets($record['DC_MISC_CURRENT_ASSETS'])
                ->setDcTotalAssets($record['DC_TOTAL_ASSETS'])
                ->setDcTotalCurrentLiabilities($record['DC_TOTAL_CURRENT_LIABILITIES'])
                ->setDcTradeCreditors($record['DC_TRADE_CREDITORS'])
                ->setDcBankOverdraft($record['DC_BANK_OVERDRAFT'])
                ->setDcOthshorttermfin($record['DC_OTH_SHORT_TERM_FIN'])
                ->setDcMisvCurrentLiabilites($record['DC_MISV_CURRENT_LIABILITES'])
                ->setDcOthLongTermFinance($record['DC_OTH_LONG_TERM_FINANCE'])
                ->setDcTotalLongTermLiabilities($record['DC_TOTAL_LONG_TERM_LIABILITIES'])
                ->setDcTotalOverdraftLtl($record['DC_TOTAL_OVERDRAFT_LTL'])
                ->setDcTotalLiabilities($record['DC_TOTAL_LIABILITIES'])
                ->setDcNetAssets($record['DC_NET_ASSETS'])
                ->setDcWorkingCapital($record['DC_WORKING_CAPITAL'])
                ->setDcPaidUpCapital($record['DC_PAID_UP_CAPITAL'])
                ->setDcProfitLossActReserve($record['DC_PROFIT_LOSS_ACT_RESERVE'])
                ->setDcSundryReserves($record['DC_SUNDRY_RESERVES'])
                ->setDcReevalReserves($record['DC_REEVAL_RESERVES'])
                ->setDcShareholdersFunds($record['DC_SHAREHOLDERS_FUNDS'])
                ->setDcNetWorth($record['DC_NET_WORTH'])
                ->setDcAccountstoFrom($record['DC_ACCOUNTS_TO_FROM'])
                ->setDcMonths($record['DC_MONTHS'])
                ->setDcCurrency($record['DC_CURRENCY'])
                ->setDcConsolidatedAccounts($record['DC_CONSOLIDATED_ACCOUNTS'])
                ->setDcTurnover($record['DC_TURNOVER'])
                ->setDcExports($record['DC_EXPORTS'])
                ->setDcCostofSales($record['DC_COST_OF_SALES'])
                ->setDcGrossProfit($record['DC_GROSS_PROFIT'])
                ->setDcWagesSalaries($record['DC_WAGES_SALARIES'])
                ->setDcDirectorsEmoluments($record['DC_DIRECTORS_EMOLUMENTS'])
                ->setDcOperatingProfit($record['DC_OPERATING_PROFIT'])
                ->setDcDepreciation($record['DC_DEPRECIATION'])
                ->setDcAuditFees($record['DC_AUDIT_FEES'])
                ->setDcInterestPayments($record['DC_INTEREST_PAYMENTS'])
                ->setDcPretaxProfit($record['DC_PRETAX_PROFIT'])
                ->setDcTax($record['DC_TAX'])
                ->setDcDividendsPayable($record['DC_DIVIDENDS_PAYABLE'])
                ->setDcRetainedProfits($record['DC_RETAINED_PROFITS'])
                ->setDcPretaxMargin($record['DC_PRETAX_MARGIN'])
                ->setDcPosttaxProfit($record['DC_POSTTAX_PROFIT'])
                ->setDcisDuplicate($record['DC_IS_DUPLICATE'])
                ->setDcIsPrimaryDupe($record['DC_IS_PRIMARY_DUPE'])
                ->setDcPrimaryDupeId($record['DC_PRIMARY_DUPE_ID'])
                ->setDcDuplicateRule($record['DC_DUPLICATE_RULE'])
                ->setDateadded(new DateTime())
                ->setAsoffdate(DateTime::createFromFormat('Y-m-d H:i:s', $asofdate))
            ;
            $em ->persist($newUKload);
            if($i == 200){
                $em ->flush($newUKload);
                $em ->clear();
                $i = 0;
            } else {
                $i = $i + 1;
            }
        }
        $em ->flush($newUKload);
        $em ->clear();
    }
}