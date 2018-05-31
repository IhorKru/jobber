<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="bedata", schema="creditsafe", uniqueConstraints={@ORM\UniqueConstraint(name="bedata_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="App\Repository\bedataRepository")
 */
class bedata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.bedata_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="accountid", type="string", nullable=false)
     */
    private $accountid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountuid", type="string", nullable=true)
     */
    private $accountuid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber", type="string", nullable=true)
     */
    private $customernumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname", type="string", nullable=true)
     */
    private $accountname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber", type="string", nullable=true)
     */
    private $registrationnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry", type="string", nullable=true)
     */
    private $billingcountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince", type="string", nullable=true)
     */
    private $billingstateprovince;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity", type="string", nullable=true)
     */
    private $billingcity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet", type="string", nullable=true)
     */
    private $billingstreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode", type="string", nullable=true)
     */
    private $billingzippostalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber", type="string", nullable=true)
     */
    private $vatnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone", type="string", nullable=true)
     */
    private $accountphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename", type="string", nullable=true)
     */
    private $middlename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated", type="string", nullable=true)
     */
    private $primaryemailupdated;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone", type="string", nullable=true)
     */
    private $workphone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_id", type="string", nullable=true)
     */
    private $dcGgsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_safe_number", type="string", nullable=true)
     */
    private $dcSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_number", type="string", nullable=true)
     */
    private $dcCompanyNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bwt_number", type="string", nullable=true)
     */
    private $dcBwtNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_name", type="string", nullable=true)
     */
    private $dcCompanyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_street", type="string", nullable=true)
     */
    private $dcStreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_house_no", type="string", nullable=true)
     */
    private $dcHouseNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_house_no_ext", type="string", nullable=true)
     */
    private $dcHouseNoExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_city_fr", type="string", nullable=true)
     */
    private $dcCityFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_city_du", type="string", nullable=true)
     */
    private $dcCityDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_postcode", type="string", nullable=true)
     */
    private $dcPostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trad_street", type="string", nullable=true)
     */
    private $dcTradStreet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trad_house_no", type="string", nullable=true)
     */
    private $dcTradHouseNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trad_house_no_ext", type="string", nullable=true)
     */
    private $dcTradHouseNoExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trad_city_fr", type="string", nullable=true)
     */
    private $dcTradCityFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trad_city_du", type="string", nullable=true)
     */
    private $dcTradCityDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trad_postcode", type="string", nullable=true)
     */
    private $dcTradPostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_telephone", type="string", nullable=true)
     */
    private $dcTelephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_fax", type="string", nullable=true)
     */
    private $dcFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_type_en", type="string", nullable=true)
     */
    private $dcCompanyTypeEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_type_fr", type="string", nullable=true)
     */
    private $dcCompanyTypeFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_type_du", type="string", nullable=true)
     */
    private $dcCompanyTypeDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_inc_date", type="string", nullable=true)
     */
    private $dcIncDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nace_code", type="string", nullable=true)
     */
    private $dcNaceCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nace_desc_en", type="string", nullable=true)
     */
    private $dcNaceDescEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nace_desc_fr", type="string", nullable=true)
     */
    private $dcNaceDescFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nace_desc_du", type="string", nullable=true)
     */
    private $dcNaceDescDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_employees", type="string", nullable=true)
     */
    private $dcEmployees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_inactivity_code", type="string", nullable=true)
     */
    private $dcInactivityCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_inactivity_desc_en", type="string", nullable=true)
     */
    private $dcInactivityDescEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_inactivity_desc_fr", type="string", nullable=true)
     */
    private $dcInactivityDescFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_inactivity_desc_du", type="string", nullable=true)
     */
    private $dcInactivityDescDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_end_date", type="string", nullable=true)
     */
    private $dcEndDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_turnover", type="string", nullable=true)
     */
    private $dcTurnover;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_operating_expenses", type="string", nullable=true)
     */
    private $dcTotalOperatingExpenses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_operating_profit", type="string", nullable=true)
     */
    private $dcOperatingProfit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_financial_income", type="string", nullable=true)
     */
    private $dcTotalFinancialIncome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_financial_expenses", type="string", nullable=true)
     */
    private $dcTotalFinancialExpenses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_result_on_ord_ops_pre_tax", type="string", nullable=true)
     */
    private $dcResultOnOrdOpsPreTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_taxation_pandl", type="string", nullable=true)
     */
    private $dcTaxationPandl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_result_on_ord_ops_post_tax", type="string", nullable=true)
     */
    private $dcResultOnOrdOpsPostTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_extraordinary_items", type="string", nullable=true)
     */
    private $dcExtraordinaryItems;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_result", type="string", nullable=true)
     */
    private $dcNetResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_dividends", type="string", nullable=true)
     */
    private $dcDividends;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_directors_remuneration", type="string", nullable=true)
     */
    private $dcDirectorsRemuneration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_employee_costs", type="string", nullable=true)
     */
    private $dcEmployeeCosts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_wages_and_salaries", type="string", nullable=true)
     */
    private $dcWagesAndSalaries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_employee_pension_costs", type="string", nullable=true)
     */
    private $dcEmployeePensionCosts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_social_security_contributions", type="string", nullable=true)
     */
    private $dcSocialSecurityContributions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_employee_costs", type="string", nullable=true)
     */
    private $dcOtherEmployeeCosts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_depreciation_and_amortisation", type="string", nullable=true)
     */
    private $dcDepreciationAndAmortisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_liable_for_vat", type="string", nullable=true)
     */
    private $dcLiableForVat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bankruptcy_flag", type="string", nullable=true)
     */
    private $dcBankruptcyFlag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_intangible_fixed_assets", type="string", nullable=true)
     */
    private $dcIntangibleFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_tangible_fixed_assets", type="string", nullable=true)
     */
    private $dcTangibleFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_land_and_buildings", type="string", nullable=true)
     */
    private $dcLandAndBuildings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_plant_and_machinery", type="string", nullable=true)
     */
    private $dcPlantAndMachinery;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_tangible_fixed_assets", type="string", nullable=true)
     */
    private $dcOtherTangibleFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_financial_fixed_assets", type="string", nullable=true)
     */
    private $dcFinancialFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_fixed_assets", type="string", nullable=true)
     */
    private $dcTotalFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_iventories", type="string", nullable=true)
     */
    private $dcIventories;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_raw_materials_and_consumables", type="string", nullable=true)
     */
    private $dcRawMaterialsAndConsumables;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_work_in_progress", type="string", nullable=true)
     */
    private $dcWorkInProgress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_finished_goods", type="string", nullable=true)
     */
    private $dcFinishedGoods;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_stocks", type="string", nullable=true)
     */
    private $dcOtherStocks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_debtors", type="string", nullable=true)
     */
    private $dcTradeDebtors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_cash", type="string", nullable=true)
     */
    private $dcCash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_amounts_receivable", type="string", nullable=true)
     */
    private $dcOtherAmountsReceivable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_miscellanous_current_assets", type="string", nullable=true)
     */
    private $dcMiscellanousCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_current_assets", type="string", nullable=true)
     */
    private $dcTotalCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_creditors", type="string", nullable=true)
     */
    private $dcTradeCreditors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_short_term_group_loans", type="string", nullable=true)
     */
    private $dcShortTermGroupLoans;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_short_term_loans", type="string", nullable=true)
     */
    private $dcOtherShortTermLoans;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_miscellaneous_current_liabilit", type="string", nullable=true)
     */
    private $dcMiscellaneousCurrentLiabilit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_current_liabilities", type="string", nullable=true)
     */
    private $dcTotalCurrentLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_long_term_group_loans", type="string", nullable=true)
     */
    private $dcLongTermGroupLoans;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_long_term_loans", type="string", nullable=true)
     */
    private $dcOtherLongTermLoans;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_long_term_liabilities", type="string", nullable=true)
     */
    private $dcOtherLongTermLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_long_term_debts", type="string", nullable=true)
     */
    private $dcTotalLongTermDebts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_issued_share_capital", type="string", nullable=true)
     */
    private $dcIssuedShareCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_share_premium_account", type="string", nullable=true)
     */
    private $dcSharePremiumAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_revenue_reserves", type="string", nullable=true)
     */
    private $dcRevenueReserves;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_revaluation_reserve", type="string", nullable=true)
     */
    private $dcRevaluationReserve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shareholders_equity", type="string", nullable=true)
     */
    private $dcShareholdersEquity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_working_capital", type="string", nullable=true)
     */
    private $dcWorkingCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_worth", type="string", nullable=true)
     */
    private $dcNetWorth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_liabilities", type="string", nullable=true)
     */
    private $dcTotalLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_assets", type="string", nullable=true)
     */
    private $dcTotalAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_pre_tax_profit_margin", type="string", nullable=true)
     */
    private $dcPreTaxProfitMargin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_return_on_capital_employed", type="string", nullable=true)
     */
    private $dcReturnOnCapitalEmployed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_return_on_total_assets_emp", type="string", nullable=true)
     */
    private $dcReturnOnTotalAssetsEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_return_on_net_assets_employed", type="string", nullable=true)
     */
    private $dcReturnOnNetAssetsEmployed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sales_net_working_capital", type="string", nullable=true)
     */
    private $dcSalesNetWorkingCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_stock_turnover_ratio", type="string", nullable=true)
     */
    private $dcStockTurnoverRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_debtor_days", type="string", nullable=true)
     */
    private $dcDebtorDays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_creditor_days", type="string", nullable=true)
     */
    private $dcCreditorDays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_current_ratio", type="string", nullable=true)
     */
    private $dcCurrentRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_liquidity_ratio", type="string", nullable=true)
     */
    private $dcLiquidityRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_current_debt_ratio", type="string", nullable=true)
     */
    private $dcCurrentDebtRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_restricted_liquidity", type="string", nullable=true)
     */
    private $dcRestrictedLiquidity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_gearing", type="string", nullable=true)
     */
    private $dcGearing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_equity_in_percentage", type="string", nullable=true)
     */
    private $dcEquityInPercentage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_debt_ratio", type="string", nullable=true)
     */
    private $dcTotalDebtRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_pb_bills_count", type="string", nullable=true)
     */
    private $dcPbBillsCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_pb_bills_value", type="string", nullable=true)
     */
    private $dcPbBillsValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nsso_count", type="string", nullable=true)
     */
    private $dcNssoCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_limit_value", type="string", nullable=true)
     */
    private $dcCreditLimitValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_rating_numeric", type="string", nullable=true)
     */
    private $dcCreditRatingNumeric;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_text_en", type="string", nullable=true)
     */
    private $dcRatingTextEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_text_fr", type="string", nullable=true)
     */
    private $dcRatingTextFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_text_du", type="string", nullable=true)
     */
    private $dcRatingTextDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_full_text_en", type="string", nullable=true)
     */
    private $dcRatingFullTextEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_full_text_fr", type="string", nullable=true)
     */
    private $dcRatingFullTextFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_full_text_du", type="string", nullable=true)
     */
    private $dcRatingFullTextDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_color_en", type="string", nullable=true)
     */
    private $dcRatingColorEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_color_fr", type="string", nullable=true)
     */
    private $dcRatingColorFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_color_du", type="string", nullable=true)
     */
    private $dcRatingColorDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_international_score", type="string", nullable=true)
     */
    private $dcInternationalScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_forename", type="string", nullable=true)
     */
    private $dcContactForename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_surname", type="string", nullable=true)
     */
    private $dcContactSurname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_position_en", type="string", nullable=true)
     */
    private $dcContactPositionEn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_position_fr", type="string", nullable=true)
     */
    private $dcContactPositionFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_position_du", type="string", nullable=true)
     */
    private $dcContactPositionDu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_dob", type="string", nullable=true)
     */
    private $dcContactDob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bts_co_is_duplicate", type="string", nullable=true)
     */
    private $btsCoIsDuplicate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="algorythm", type="string", nullable=true)
     */
    private $algorythm;

    /**
     * @var string
     *
     * @ORM\Column(name="dateadded", type="string", nullable=false)
     */
    private $dateadded;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountid(): ?string
    {
        return $this->accountid;
    }

    public function setAccountid(string $accountid): self
    {
        $this->accountid = $accountid;

        return $this;
    }

    public function getAccountuid(): ?string
    {
        return $this->accountuid;
    }

    public function setAccountuid(?string $accountuid): self
    {
        $this->accountuid = $accountuid;

        return $this;
    }

    public function getCustomernumber(): ?string
    {
        return $this->customernumber;
    }

    public function setCustomernumber(?string $customernumber): self
    {
        $this->customernumber = $customernumber;

        return $this;
    }

    public function getAccountname(): ?string
    {
        return $this->accountname;
    }

    public function setAccountname(?string $accountname): self
    {
        $this->accountname = $accountname;

        return $this;
    }

    public function getRegistrationnumber(): ?string
    {
        return $this->registrationnumber;
    }

    public function setRegistrationnumber(?string $registrationnumber): self
    {
        $this->registrationnumber = $registrationnumber;

        return $this;
    }

    public function getBillingcountry(): ?string
    {
        return $this->billingcountry;
    }

    public function setBillingcountry(?string $billingcountry): self
    {
        $this->billingcountry = $billingcountry;

        return $this;
    }

    public function getBillingstateprovince(): ?string
    {
        return $this->billingstateprovince;
    }

    public function setBillingstateprovince(?string $billingstateprovince): self
    {
        $this->billingstateprovince = $billingstateprovince;

        return $this;
    }

    public function getBillingcity(): ?string
    {
        return $this->billingcity;
    }

    public function setBillingcity(?string $billingcity): self
    {
        $this->billingcity = $billingcity;

        return $this;
    }

    public function getBillingstreet(): ?string
    {
        return $this->billingstreet;
    }

    public function setBillingstreet(?string $billingstreet): self
    {
        $this->billingstreet = $billingstreet;

        return $this;
    }

    public function getBillingzippostalcode(): ?string
    {
        return $this->billingzippostalcode;
    }

    public function setBillingzippostalcode(?string $billingzippostalcode): self
    {
        $this->billingzippostalcode = $billingzippostalcode;

        return $this;
    }

    public function getVatnumber(): ?string
    {
        return $this->vatnumber;
    }

    public function setVatnumber(?string $vatnumber): self
    {
        $this->vatnumber = $vatnumber;

        return $this;
    }

    public function getAccountphone(): ?string
    {
        return $this->accountphone;
    }

    public function setAccountphone(?string $accountphone): self
    {
        $this->accountphone = $accountphone;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function setMiddlename(?string $middlename): self
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPrimaryemailupdated(): ?string
    {
        return $this->primaryemailupdated;
    }

    public function setPrimaryemailupdated(?string $primaryemailupdated): self
    {
        $this->primaryemailupdated = $primaryemailupdated;

        return $this;
    }

    public function getWorkphone(): ?string
    {
        return $this->workphone;
    }

    public function setWorkphone(?string $workphone): self
    {
        $this->workphone = $workphone;

        return $this;
    }

    public function getDcGgsId(): ?string
    {
        return $this->dcGgsId;
    }

    public function setDcGgsId(?string $dcGgsId): self
    {
        $this->dcGgsId = $dcGgsId;

        return $this;
    }

    public function getDcSafeNumber(): ?string
    {
        return $this->dcSafeNumber;
    }

    public function setDcSafeNumber(?string $dcSafeNumber): self
    {
        $this->dcSafeNumber = $dcSafeNumber;

        return $this;
    }

    public function getDcCompanyNumber(): ?string
    {
        return $this->dcCompanyNumber;
    }

    public function setDcCompanyNumber(?string $dcCompanyNumber): self
    {
        $this->dcCompanyNumber = $dcCompanyNumber;

        return $this;
    }

    public function getDcBwtNumber(): ?string
    {
        return $this->dcBwtNumber;
    }

    public function setDcBwtNumber(?string $dcBwtNumber): self
    {
        $this->dcBwtNumber = $dcBwtNumber;

        return $this;
    }

    public function getDcCompanyName(): ?string
    {
        return $this->dcCompanyName;
    }

    public function setDcCompanyName(?string $dcCompanyName): self
    {
        $this->dcCompanyName = $dcCompanyName;

        return $this;
    }

    public function getDcStreet(): ?string
    {
        return $this->dcStreet;
    }

    public function setDcStreet(?string $dcStreet): self
    {
        $this->dcStreet = $dcStreet;

        return $this;
    }

    public function getDcHouseNo(): ?string
    {
        return $this->dcHouseNo;
    }

    public function setDcHouseNo(?string $dcHouseNo): self
    {
        $this->dcHouseNo = $dcHouseNo;

        return $this;
    }

    public function getDcHouseNoExt(): ?string
    {
        return $this->dcHouseNoExt;
    }

    public function setDcHouseNoExt(?string $dcHouseNoExt): self
    {
        $this->dcHouseNoExt = $dcHouseNoExt;

        return $this;
    }

    public function getDcCityFr(): ?string
    {
        return $this->dcCityFr;
    }

    public function setDcCityFr(?string $dcCityFr): self
    {
        $this->dcCityFr = $dcCityFr;

        return $this;
    }

    public function getDcCityDu(): ?string
    {
        return $this->dcCityDu;
    }

    public function setDcCityDu(?string $dcCityDu): self
    {
        $this->dcCityDu = $dcCityDu;

        return $this;
    }

    public function getDcPostcode(): ?string
    {
        return $this->dcPostcode;
    }

    public function setDcPostcode(?string $dcPostcode): self
    {
        $this->dcPostcode = $dcPostcode;

        return $this;
    }

    public function getDcTradStreet(): ?string
    {
        return $this->dcTradStreet;
    }

    public function setDcTradStreet(?string $dcTradStreet): self
    {
        $this->dcTradStreet = $dcTradStreet;

        return $this;
    }

    public function getDcTradHouseNo(): ?string
    {
        return $this->dcTradHouseNo;
    }

    public function setDcTradHouseNo(?string $dcTradHouseNo): self
    {
        $this->dcTradHouseNo = $dcTradHouseNo;

        return $this;
    }

    public function getDcTradHouseNoExt(): ?string
    {
        return $this->dcTradHouseNoExt;
    }

    public function setDcTradHouseNoExt(?string $dcTradHouseNoExt): self
    {
        $this->dcTradHouseNoExt = $dcTradHouseNoExt;

        return $this;
    }

    public function getDcTradCityFr(): ?string
    {
        return $this->dcTradCityFr;
    }

    public function setDcTradCityFr(?string $dcTradCityFr): self
    {
        $this->dcTradCityFr = $dcTradCityFr;

        return $this;
    }

    public function getDcTradCityDu(): ?string
    {
        return $this->dcTradCityDu;
    }

    public function setDcTradCityDu(?string $dcTradCityDu): self
    {
        $this->dcTradCityDu = $dcTradCityDu;

        return $this;
    }

    public function getDcTradPostcode(): ?string
    {
        return $this->dcTradPostcode;
    }

    public function setDcTradPostcode(?string $dcTradPostcode): self
    {
        $this->dcTradPostcode = $dcTradPostcode;

        return $this;
    }

    public function getDcTelephone(): ?string
    {
        return $this->dcTelephone;
    }

    public function setDcTelephone(?string $dcTelephone): self
    {
        $this->dcTelephone = $dcTelephone;

        return $this;
    }

    public function getDcFax(): ?string
    {
        return $this->dcFax;
    }

    public function setDcFax(?string $dcFax): self
    {
        $this->dcFax = $dcFax;

        return $this;
    }

    public function getDcCompanyTypeEn(): ?string
    {
        return $this->dcCompanyTypeEn;
    }

    public function setDcCompanyTypeEn(?string $dcCompanyTypeEn): self
    {
        $this->dcCompanyTypeEn = $dcCompanyTypeEn;

        return $this;
    }

    public function getDcCompanyTypeFr(): ?string
    {
        return $this->dcCompanyTypeFr;
    }

    public function setDcCompanyTypeFr(?string $dcCompanyTypeFr): self
    {
        $this->dcCompanyTypeFr = $dcCompanyTypeFr;

        return $this;
    }

    public function getDcCompanyTypeDu(): ?string
    {
        return $this->dcCompanyTypeDu;
    }

    public function setDcCompanyTypeDu(?string $dcCompanyTypeDu): self
    {
        $this->dcCompanyTypeDu = $dcCompanyTypeDu;

        return $this;
    }

    public function getDcIncDate(): ?string
    {
        return $this->dcIncDate;
    }

    public function setDcIncDate(?string $dcIncDate): self
    {
        $this->dcIncDate = $dcIncDate;

        return $this;
    }

    public function getDcNaceCode(): ?string
    {
        return $this->dcNaceCode;
    }

    public function setDcNaceCode(?string $dcNaceCode): self
    {
        $this->dcNaceCode = $dcNaceCode;

        return $this;
    }

    public function getDcNaceDescEn(): ?string
    {
        return $this->dcNaceDescEn;
    }

    public function setDcNaceDescEn(?string $dcNaceDescEn): self
    {
        $this->dcNaceDescEn = $dcNaceDescEn;

        return $this;
    }

    public function getDcNaceDescFr(): ?string
    {
        return $this->dcNaceDescFr;
    }

    public function setDcNaceDescFr(?string $dcNaceDescFr): self
    {
        $this->dcNaceDescFr = $dcNaceDescFr;

        return $this;
    }

    public function getDcNaceDescDu(): ?string
    {
        return $this->dcNaceDescDu;
    }

    public function setDcNaceDescDu(?string $dcNaceDescDu): self
    {
        $this->dcNaceDescDu = $dcNaceDescDu;

        return $this;
    }

    public function getDcEmployees(): ?string
    {
        return $this->dcEmployees;
    }

    public function setDcEmployees(?string $dcEmployees): self
    {
        $this->dcEmployees = $dcEmployees;

        return $this;
    }

    public function getDcInactivityCode(): ?string
    {
        return $this->dcInactivityCode;
    }

    public function setDcInactivityCode(?string $dcInactivityCode): self
    {
        $this->dcInactivityCode = $dcInactivityCode;

        return $this;
    }

    public function getDcInactivityDescEn(): ?string
    {
        return $this->dcInactivityDescEn;
    }

    public function setDcInactivityDescEn(?string $dcInactivityDescEn): self
    {
        $this->dcInactivityDescEn = $dcInactivityDescEn;

        return $this;
    }

    public function getDcInactivityDescFr(): ?string
    {
        return $this->dcInactivityDescFr;
    }

    public function setDcInactivityDescFr(?string $dcInactivityDescFr): self
    {
        $this->dcInactivityDescFr = $dcInactivityDescFr;

        return $this;
    }

    public function getDcInactivityDescDu(): ?string
    {
        return $this->dcInactivityDescDu;
    }

    public function setDcInactivityDescDu(?string $dcInactivityDescDu): self
    {
        $this->dcInactivityDescDu = $dcInactivityDescDu;

        return $this;
    }

    public function getDcEndDate(): ?string
    {
        return $this->dcEndDate;
    }

    public function setDcEndDate(?string $dcEndDate): self
    {
        $this->dcEndDate = $dcEndDate;

        return $this;
    }

    public function getDcTurnover(): ?string
    {
        return $this->dcTurnover;
    }

    public function setDcTurnover(?string $dcTurnover): self
    {
        $this->dcTurnover = $dcTurnover;

        return $this;
    }

    public function getDcTotalOperatingExpenses(): ?string
    {
        return $this->dcTotalOperatingExpenses;
    }

    public function setDcTotalOperatingExpenses(?string $dcTotalOperatingExpenses): self
    {
        $this->dcTotalOperatingExpenses = $dcTotalOperatingExpenses;

        return $this;
    }

    public function getDcOperatingProfit(): ?string
    {
        return $this->dcOperatingProfit;
    }

    public function setDcOperatingProfit(?string $dcOperatingProfit): self
    {
        $this->dcOperatingProfit = $dcOperatingProfit;

        return $this;
    }

    public function getDcTotalFinancialIncome(): ?string
    {
        return $this->dcTotalFinancialIncome;
    }

    public function setDcTotalFinancialIncome(?string $dcTotalFinancialIncome): self
    {
        $this->dcTotalFinancialIncome = $dcTotalFinancialIncome;

        return $this;
    }

    public function getDcTotalFinancialExpenses(): ?string
    {
        return $this->dcTotalFinancialExpenses;
    }

    public function setDcTotalFinancialExpenses(?string $dcTotalFinancialExpenses): self
    {
        $this->dcTotalFinancialExpenses = $dcTotalFinancialExpenses;

        return $this;
    }

    public function getDcResultOnOrdOpsPreTax(): ?string
    {
        return $this->dcResultOnOrdOpsPreTax;
    }

    public function setDcResultOnOrdOpsPreTax(?string $dcResultOnOrdOpsPreTax): self
    {
        $this->dcResultOnOrdOpsPreTax = $dcResultOnOrdOpsPreTax;

        return $this;
    }

    public function getDcTaxationPandl(): ?string
    {
        return $this->dcTaxationPandl;
    }

    public function setDcTaxationPandl(?string $dcTaxationPandl): self
    {
        $this->dcTaxationPandl = $dcTaxationPandl;

        return $this;
    }

    public function getDcResultOnOrdOpsPostTax(): ?string
    {
        return $this->dcResultOnOrdOpsPostTax;
    }

    public function setDcResultOnOrdOpsPostTax(?string $dcResultOnOrdOpsPostTax): self
    {
        $this->dcResultOnOrdOpsPostTax = $dcResultOnOrdOpsPostTax;

        return $this;
    }

    public function getDcExtraordinaryItems(): ?string
    {
        return $this->dcExtraordinaryItems;
    }

    public function setDcExtraordinaryItems(?string $dcExtraordinaryItems): self
    {
        $this->dcExtraordinaryItems = $dcExtraordinaryItems;

        return $this;
    }

    public function getDcNetResult(): ?string
    {
        return $this->dcNetResult;
    }

    public function setDcNetResult(?string $dcNetResult): self
    {
        $this->dcNetResult = $dcNetResult;

        return $this;
    }

    public function getDcDividends(): ?string
    {
        return $this->dcDividends;
    }

    public function setDcDividends(?string $dcDividends): self
    {
        $this->dcDividends = $dcDividends;

        return $this;
    }

    public function getDcDirectorsRemuneration(): ?string
    {
        return $this->dcDirectorsRemuneration;
    }

    public function setDcDirectorsRemuneration(?string $dcDirectorsRemuneration): self
    {
        $this->dcDirectorsRemuneration = $dcDirectorsRemuneration;

        return $this;
    }

    public function getDcEmployeeCosts(): ?string
    {
        return $this->dcEmployeeCosts;
    }

    public function setDcEmployeeCosts(?string $dcEmployeeCosts): self
    {
        $this->dcEmployeeCosts = $dcEmployeeCosts;

        return $this;
    }

    public function getDcWagesAndSalaries(): ?string
    {
        return $this->dcWagesAndSalaries;
    }

    public function setDcWagesAndSalaries(?string $dcWagesAndSalaries): self
    {
        $this->dcWagesAndSalaries = $dcWagesAndSalaries;

        return $this;
    }

    public function getDcEmployeePensionCosts(): ?string
    {
        return $this->dcEmployeePensionCosts;
    }

    public function setDcEmployeePensionCosts(?string $dcEmployeePensionCosts): self
    {
        $this->dcEmployeePensionCosts = $dcEmployeePensionCosts;

        return $this;
    }

    public function getDcSocialSecurityContributions(): ?string
    {
        return $this->dcSocialSecurityContributions;
    }

    public function setDcSocialSecurityContributions(?string $dcSocialSecurityContributions): self
    {
        $this->dcSocialSecurityContributions = $dcSocialSecurityContributions;

        return $this;
    }

    public function getDcOtherEmployeeCosts(): ?string
    {
        return $this->dcOtherEmployeeCosts;
    }

    public function setDcOtherEmployeeCosts(?string $dcOtherEmployeeCosts): self
    {
        $this->dcOtherEmployeeCosts = $dcOtherEmployeeCosts;

        return $this;
    }

    public function getDcDepreciationAndAmortisation(): ?string
    {
        return $this->dcDepreciationAndAmortisation;
    }

    public function setDcDepreciationAndAmortisation(?string $dcDepreciationAndAmortisation): self
    {
        $this->dcDepreciationAndAmortisation = $dcDepreciationAndAmortisation;

        return $this;
    }

    public function getDcLiableForVat(): ?string
    {
        return $this->dcLiableForVat;
    }

    public function setDcLiableForVat(?string $dcLiableForVat): self
    {
        $this->dcLiableForVat = $dcLiableForVat;

        return $this;
    }

    public function getDcBankruptcyFlag(): ?string
    {
        return $this->dcBankruptcyFlag;
    }

    public function setDcBankruptcyFlag(?string $dcBankruptcyFlag): self
    {
        $this->dcBankruptcyFlag = $dcBankruptcyFlag;

        return $this;
    }

    public function getDcIntangibleFixedAssets(): ?string
    {
        return $this->dcIntangibleFixedAssets;
    }

    public function setDcIntangibleFixedAssets(?string $dcIntangibleFixedAssets): self
    {
        $this->dcIntangibleFixedAssets = $dcIntangibleFixedAssets;

        return $this;
    }

    public function getDcTangibleFixedAssets(): ?string
    {
        return $this->dcTangibleFixedAssets;
    }

    public function setDcTangibleFixedAssets(?string $dcTangibleFixedAssets): self
    {
        $this->dcTangibleFixedAssets = $dcTangibleFixedAssets;

        return $this;
    }

    public function getDcLandAndBuildings(): ?string
    {
        return $this->dcLandAndBuildings;
    }

    public function setDcLandAndBuildings(?string $dcLandAndBuildings): self
    {
        $this->dcLandAndBuildings = $dcLandAndBuildings;

        return $this;
    }

    public function getDcPlantAndMachinery(): ?string
    {
        return $this->dcPlantAndMachinery;
    }

    public function setDcPlantAndMachinery(?string $dcPlantAndMachinery): self
    {
        $this->dcPlantAndMachinery = $dcPlantAndMachinery;

        return $this;
    }

    public function getDcOtherTangibleFixedAssets(): ?string
    {
        return $this->dcOtherTangibleFixedAssets;
    }

    public function setDcOtherTangibleFixedAssets(?string $dcOtherTangibleFixedAssets): self
    {
        $this->dcOtherTangibleFixedAssets = $dcOtherTangibleFixedAssets;

        return $this;
    }

    public function getDcFinancialFixedAssets(): ?string
    {
        return $this->dcFinancialFixedAssets;
    }

    public function setDcFinancialFixedAssets(?string $dcFinancialFixedAssets): self
    {
        $this->dcFinancialFixedAssets = $dcFinancialFixedAssets;

        return $this;
    }

    public function getDcTotalFixedAssets(): ?string
    {
        return $this->dcTotalFixedAssets;
    }

    public function setDcTotalFixedAssets(?string $dcTotalFixedAssets): self
    {
        $this->dcTotalFixedAssets = $dcTotalFixedAssets;

        return $this;
    }

    public function getDcIventories(): ?string
    {
        return $this->dcIventories;
    }

    public function setDcIventories(?string $dcIventories): self
    {
        $this->dcIventories = $dcIventories;

        return $this;
    }

    public function getDcRawMaterialsAndConsumables(): ?string
    {
        return $this->dcRawMaterialsAndConsumables;
    }

    public function setDcRawMaterialsAndConsumables(?string $dcRawMaterialsAndConsumables): self
    {
        $this->dcRawMaterialsAndConsumables = $dcRawMaterialsAndConsumables;

        return $this;
    }

    public function getDcWorkInProgress(): ?string
    {
        return $this->dcWorkInProgress;
    }

    public function setDcWorkInProgress(?string $dcWorkInProgress): self
    {
        $this->dcWorkInProgress = $dcWorkInProgress;

        return $this;
    }

    public function getDcFinishedGoods(): ?string
    {
        return $this->dcFinishedGoods;
    }

    public function setDcFinishedGoods(?string $dcFinishedGoods): self
    {
        $this->dcFinishedGoods = $dcFinishedGoods;

        return $this;
    }

    public function getDcOtherStocks(): ?string
    {
        return $this->dcOtherStocks;
    }

    public function setDcOtherStocks(?string $dcOtherStocks): self
    {
        $this->dcOtherStocks = $dcOtherStocks;

        return $this;
    }

    public function getDcTradeDebtors(): ?string
    {
        return $this->dcTradeDebtors;
    }

    public function setDcTradeDebtors(?string $dcTradeDebtors): self
    {
        $this->dcTradeDebtors = $dcTradeDebtors;

        return $this;
    }

    public function getDcCash(): ?string
    {
        return $this->dcCash;
    }

    public function setDcCash(?string $dcCash): self
    {
        $this->dcCash = $dcCash;

        return $this;
    }

    public function getDcOtherAmountsReceivable(): ?string
    {
        return $this->dcOtherAmountsReceivable;
    }

    public function setDcOtherAmountsReceivable(?string $dcOtherAmountsReceivable): self
    {
        $this->dcOtherAmountsReceivable = $dcOtherAmountsReceivable;

        return $this;
    }

    public function getDcMiscellanousCurrentAssets(): ?string
    {
        return $this->dcMiscellanousCurrentAssets;
    }

    public function setDcMiscellanousCurrentAssets(?string $dcMiscellanousCurrentAssets): self
    {
        $this->dcMiscellanousCurrentAssets = $dcMiscellanousCurrentAssets;

        return $this;
    }

    public function getDcTotalCurrentAssets(): ?string
    {
        return $this->dcTotalCurrentAssets;
    }

    public function setDcTotalCurrentAssets(?string $dcTotalCurrentAssets): self
    {
        $this->dcTotalCurrentAssets = $dcTotalCurrentAssets;

        return $this;
    }

    public function getDcTradeCreditors(): ?string
    {
        return $this->dcTradeCreditors;
    }

    public function setDcTradeCreditors(?string $dcTradeCreditors): self
    {
        $this->dcTradeCreditors = $dcTradeCreditors;

        return $this;
    }

    public function getDcShortTermGroupLoans(): ?string
    {
        return $this->dcShortTermGroupLoans;
    }

    public function setDcShortTermGroupLoans(?string $dcShortTermGroupLoans): self
    {
        $this->dcShortTermGroupLoans = $dcShortTermGroupLoans;

        return $this;
    }

    public function getDcOtherShortTermLoans(): ?string
    {
        return $this->dcOtherShortTermLoans;
    }

    public function setDcOtherShortTermLoans(?string $dcOtherShortTermLoans): self
    {
        $this->dcOtherShortTermLoans = $dcOtherShortTermLoans;

        return $this;
    }

    public function getDcMiscellaneousCurrentLiabilit(): ?string
    {
        return $this->dcMiscellaneousCurrentLiabilit;
    }

    public function setDcMiscellaneousCurrentLiabilit(?string $dcMiscellaneousCurrentLiabilit): self
    {
        $this->dcMiscellaneousCurrentLiabilit = $dcMiscellaneousCurrentLiabilit;

        return $this;
    }

    public function getDcTotalCurrentLiabilities(): ?string
    {
        return $this->dcTotalCurrentLiabilities;
    }

    public function setDcTotalCurrentLiabilities(?string $dcTotalCurrentLiabilities): self
    {
        $this->dcTotalCurrentLiabilities = $dcTotalCurrentLiabilities;

        return $this;
    }

    public function getDcLongTermGroupLoans(): ?string
    {
        return $this->dcLongTermGroupLoans;
    }

    public function setDcLongTermGroupLoans(?string $dcLongTermGroupLoans): self
    {
        $this->dcLongTermGroupLoans = $dcLongTermGroupLoans;

        return $this;
    }

    public function getDcOtherLongTermLoans(): ?string
    {
        return $this->dcOtherLongTermLoans;
    }

    public function setDcOtherLongTermLoans(?string $dcOtherLongTermLoans): self
    {
        $this->dcOtherLongTermLoans = $dcOtherLongTermLoans;

        return $this;
    }

    public function getDcOtherLongTermLiabilities(): ?string
    {
        return $this->dcOtherLongTermLiabilities;
    }

    public function setDcOtherLongTermLiabilities(?string $dcOtherLongTermLiabilities): self
    {
        $this->dcOtherLongTermLiabilities = $dcOtherLongTermLiabilities;

        return $this;
    }

    public function getDcTotalLongTermDebts(): ?string
    {
        return $this->dcTotalLongTermDebts;
    }

    public function setDcTotalLongTermDebts(?string $dcTotalLongTermDebts): self
    {
        $this->dcTotalLongTermDebts = $dcTotalLongTermDebts;

        return $this;
    }

    public function getDcIssuedShareCapital(): ?string
    {
        return $this->dcIssuedShareCapital;
    }

    public function setDcIssuedShareCapital(?string $dcIssuedShareCapital): self
    {
        $this->dcIssuedShareCapital = $dcIssuedShareCapital;

        return $this;
    }

    public function getDcSharePremiumAccount(): ?string
    {
        return $this->dcSharePremiumAccount;
    }

    public function setDcSharePremiumAccount(?string $dcSharePremiumAccount): self
    {
        $this->dcSharePremiumAccount = $dcSharePremiumAccount;

        return $this;
    }

    public function getDcRevenueReserves(): ?string
    {
        return $this->dcRevenueReserves;
    }

    public function setDcRevenueReserves(?string $dcRevenueReserves): self
    {
        $this->dcRevenueReserves = $dcRevenueReserves;

        return $this;
    }

    public function getDcRevaluationReserve(): ?string
    {
        return $this->dcRevaluationReserve;
    }

    public function setDcRevaluationReserve(?string $dcRevaluationReserve): self
    {
        $this->dcRevaluationReserve = $dcRevaluationReserve;

        return $this;
    }

    public function getDcShareholdersEquity(): ?string
    {
        return $this->dcShareholdersEquity;
    }

    public function setDcShareholdersEquity(?string $dcShareholdersEquity): self
    {
        $this->dcShareholdersEquity = $dcShareholdersEquity;

        return $this;
    }

    public function getDcWorkingCapital(): ?string
    {
        return $this->dcWorkingCapital;
    }

    public function setDcWorkingCapital(?string $dcWorkingCapital): self
    {
        $this->dcWorkingCapital = $dcWorkingCapital;

        return $this;
    }

    public function getDcNetWorth(): ?string
    {
        return $this->dcNetWorth;
    }

    public function setDcNetWorth(?string $dcNetWorth): self
    {
        $this->dcNetWorth = $dcNetWorth;

        return $this;
    }

    public function getDcTotalLiabilities(): ?string
    {
        return $this->dcTotalLiabilities;
    }

    public function setDcTotalLiabilities(?string $dcTotalLiabilities): self
    {
        $this->dcTotalLiabilities = $dcTotalLiabilities;

        return $this;
    }

    public function getDcTotalAssets(): ?string
    {
        return $this->dcTotalAssets;
    }

    public function setDcTotalAssets(?string $dcTotalAssets): self
    {
        $this->dcTotalAssets = $dcTotalAssets;

        return $this;
    }

    public function getDcPreTaxProfitMargin(): ?string
    {
        return $this->dcPreTaxProfitMargin;
    }

    public function setDcPreTaxProfitMargin(?string $dcPreTaxProfitMargin): self
    {
        $this->dcPreTaxProfitMargin = $dcPreTaxProfitMargin;

        return $this;
    }

    public function getDcReturnOnCapitalEmployed(): ?string
    {
        return $this->dcReturnOnCapitalEmployed;
    }

    public function setDcReturnOnCapitalEmployed(?string $dcReturnOnCapitalEmployed): self
    {
        $this->dcReturnOnCapitalEmployed = $dcReturnOnCapitalEmployed;

        return $this;
    }

    public function getDcReturnOnTotalAssetsEmp(): ?string
    {
        return $this->dcReturnOnTotalAssetsEmp;
    }

    public function setDcReturnOnTotalAssetsEmp(?string $dcReturnOnTotalAssetsEmp): self
    {
        $this->dcReturnOnTotalAssetsEmp = $dcReturnOnTotalAssetsEmp;

        return $this;
    }

    public function getDcReturnOnNetAssetsEmployed(): ?string
    {
        return $this->dcReturnOnNetAssetsEmployed;
    }

    public function setDcReturnOnNetAssetsEmployed(?string $dcReturnOnNetAssetsEmployed): self
    {
        $this->dcReturnOnNetAssetsEmployed = $dcReturnOnNetAssetsEmployed;

        return $this;
    }

    public function getDcSalesNetWorkingCapital(): ?string
    {
        return $this->dcSalesNetWorkingCapital;
    }

    public function setDcSalesNetWorkingCapital(?string $dcSalesNetWorkingCapital): self
    {
        $this->dcSalesNetWorkingCapital = $dcSalesNetWorkingCapital;

        return $this;
    }

    public function getDcStockTurnoverRatio(): ?string
    {
        return $this->dcStockTurnoverRatio;
    }

    public function setDcStockTurnoverRatio(?string $dcStockTurnoverRatio): self
    {
        $this->dcStockTurnoverRatio = $dcStockTurnoverRatio;

        return $this;
    }

    public function getDcDebtorDays(): ?string
    {
        return $this->dcDebtorDays;
    }

    public function setDcDebtorDays(?string $dcDebtorDays): self
    {
        $this->dcDebtorDays = $dcDebtorDays;

        return $this;
    }

    public function getDcCreditorDays(): ?string
    {
        return $this->dcCreditorDays;
    }

    public function setDcCreditorDays(?string $dcCreditorDays): self
    {
        $this->dcCreditorDays = $dcCreditorDays;

        return $this;
    }

    public function getDcCurrentRatio(): ?string
    {
        return $this->dcCurrentRatio;
    }

    public function setDcCurrentRatio(?string $dcCurrentRatio): self
    {
        $this->dcCurrentRatio = $dcCurrentRatio;

        return $this;
    }

    public function getDcLiquidityRatio(): ?string
    {
        return $this->dcLiquidityRatio;
    }

    public function setDcLiquidityRatio(?string $dcLiquidityRatio): self
    {
        $this->dcLiquidityRatio = $dcLiquidityRatio;

        return $this;
    }

    public function getDcCurrentDebtRatio(): ?string
    {
        return $this->dcCurrentDebtRatio;
    }

    public function setDcCurrentDebtRatio(?string $dcCurrentDebtRatio): self
    {
        $this->dcCurrentDebtRatio = $dcCurrentDebtRatio;

        return $this;
    }

    public function getDcRestrictedLiquidity(): ?string
    {
        return $this->dcRestrictedLiquidity;
    }

    public function setDcRestrictedLiquidity(?string $dcRestrictedLiquidity): self
    {
        $this->dcRestrictedLiquidity = $dcRestrictedLiquidity;

        return $this;
    }

    public function getDcGearing(): ?string
    {
        return $this->dcGearing;
    }

    public function setDcGearing(?string $dcGearing): self
    {
        $this->dcGearing = $dcGearing;

        return $this;
    }

    public function getDcEquityInPercentage(): ?string
    {
        return $this->dcEquityInPercentage;
    }

    public function setDcEquityInPercentage(?string $dcEquityInPercentage): self
    {
        $this->dcEquityInPercentage = $dcEquityInPercentage;

        return $this;
    }

    public function getDcTotalDebtRatio(): ?string
    {
        return $this->dcTotalDebtRatio;
    }

    public function setDcTotalDebtRatio(?string $dcTotalDebtRatio): self
    {
        $this->dcTotalDebtRatio = $dcTotalDebtRatio;

        return $this;
    }

    public function getDcPbBillsCount(): ?string
    {
        return $this->dcPbBillsCount;
    }

    public function setDcPbBillsCount(?string $dcPbBillsCount): self
    {
        $this->dcPbBillsCount = $dcPbBillsCount;

        return $this;
    }

    public function getDcPbBillsValue(): ?string
    {
        return $this->dcPbBillsValue;
    }

    public function setDcPbBillsValue(?string $dcPbBillsValue): self
    {
        $this->dcPbBillsValue = $dcPbBillsValue;

        return $this;
    }

    public function getDcNssoCount(): ?string
    {
        return $this->dcNssoCount;
    }

    public function setDcNssoCount(?string $dcNssoCount): self
    {
        $this->dcNssoCount = $dcNssoCount;

        return $this;
    }

    public function getDcCreditLimitValue(): ?string
    {
        return $this->dcCreditLimitValue;
    }

    public function setDcCreditLimitValue(?string $dcCreditLimitValue): self
    {
        $this->dcCreditLimitValue = $dcCreditLimitValue;

        return $this;
    }

    public function getDcCreditRatingNumeric(): ?string
    {
        return $this->dcCreditRatingNumeric;
    }

    public function setDcCreditRatingNumeric(?string $dcCreditRatingNumeric): self
    {
        $this->dcCreditRatingNumeric = $dcCreditRatingNumeric;

        return $this;
    }

    public function getDcRatingTextEn(): ?string
    {
        return $this->dcRatingTextEn;
    }

    public function setDcRatingTextEn(?string $dcRatingTextEn): self
    {
        $this->dcRatingTextEn = $dcRatingTextEn;

        return $this;
    }

    public function getDcRatingTextFr(): ?string
    {
        return $this->dcRatingTextFr;
    }

    public function setDcRatingTextFr(?string $dcRatingTextFr): self
    {
        $this->dcRatingTextFr = $dcRatingTextFr;

        return $this;
    }

    public function getDcRatingTextDu(): ?string
    {
        return $this->dcRatingTextDu;
    }

    public function setDcRatingTextDu(?string $dcRatingTextDu): self
    {
        $this->dcRatingTextDu = $dcRatingTextDu;

        return $this;
    }

    public function getDcRatingFullTextEn(): ?string
    {
        return $this->dcRatingFullTextEn;
    }

    public function setDcRatingFullTextEn(?string $dcRatingFullTextEn): self
    {
        $this->dcRatingFullTextEn = $dcRatingFullTextEn;

        return $this;
    }

    public function getDcRatingFullTextFr(): ?string
    {
        return $this->dcRatingFullTextFr;
    }

    public function setDcRatingFullTextFr(?string $dcRatingFullTextFr): self
    {
        $this->dcRatingFullTextFr = $dcRatingFullTextFr;

        return $this;
    }

    public function getDcRatingFullTextDu(): ?string
    {
        return $this->dcRatingFullTextDu;
    }

    public function setDcRatingFullTextDu(?string $dcRatingFullTextDu): self
    {
        $this->dcRatingFullTextDu = $dcRatingFullTextDu;

        return $this;
    }

    public function getDcRatingColorEn(): ?string
    {
        return $this->dcRatingColorEn;
    }

    public function setDcRatingColorEn(?string $dcRatingColorEn): self
    {
        $this->dcRatingColorEn = $dcRatingColorEn;

        return $this;
    }

    public function getDcRatingColorFr(): ?string
    {
        return $this->dcRatingColorFr;
    }

    public function setDcRatingColorFr(?string $dcRatingColorFr): self
    {
        $this->dcRatingColorFr = $dcRatingColorFr;

        return $this;
    }

    public function getDcRatingColorDu(): ?string
    {
        return $this->dcRatingColorDu;
    }

    public function setDcRatingColorDu(?string $dcRatingColorDu): self
    {
        $this->dcRatingColorDu = $dcRatingColorDu;

        return $this;
    }

    public function getDcInternationalScore(): ?string
    {
        return $this->dcInternationalScore;
    }

    public function setDcInternationalScore(?string $dcInternationalScore): self
    {
        $this->dcInternationalScore = $dcInternationalScore;

        return $this;
    }

    public function getDcContactForename(): ?string
    {
        return $this->dcContactForename;
    }

    public function setDcContactForename(?string $dcContactForename): self
    {
        $this->dcContactForename = $dcContactForename;

        return $this;
    }

    public function getDcContactSurname(): ?string
    {
        return $this->dcContactSurname;
    }

    public function setDcContactSurname(?string $dcContactSurname): self
    {
        $this->dcContactSurname = $dcContactSurname;

        return $this;
    }

    public function getDcContactPositionEn(): ?string
    {
        return $this->dcContactPositionEn;
    }

    public function setDcContactPositionEn(?string $dcContactPositionEn): self
    {
        $this->dcContactPositionEn = $dcContactPositionEn;

        return $this;
    }

    public function getDcContactPositionFr(): ?string
    {
        return $this->dcContactPositionFr;
    }

    public function setDcContactPositionFr(?string $dcContactPositionFr): self
    {
        $this->dcContactPositionFr = $dcContactPositionFr;

        return $this;
    }

    public function getDcContactPositionDu(): ?string
    {
        return $this->dcContactPositionDu;
    }

    public function setDcContactPositionDu(?string $dcContactPositionDu): self
    {
        $this->dcContactPositionDu = $dcContactPositionDu;

        return $this;
    }

    public function getDcContactDob(): ?string
    {
        return $this->dcContactDob;
    }

    public function setDcContactDob(?string $dcContactDob): self
    {
        $this->dcContactDob = $dcContactDob;

        return $this;
    }

    public function getBtsCoIsDuplicate(): ?string
    {
        return $this->btsCoIsDuplicate;
    }

    public function setBtsCoIsDuplicate(?string $btsCoIsDuplicate): self
    {
        $this->btsCoIsDuplicate = $btsCoIsDuplicate;

        return $this;
    }

    public function getAlgorythm(): ?string
    {
        return $this->algorythm;
    }

    public function setAlgorythm(?string $algorythm): self
    {
        $this->algorythm = $algorythm;

        return $this;
    }

    public function getDateadded(): ?string
    {
        return $this->dateadded;
    }

    public function setDateadded(string $dateadded): self
    {
        $this->dateadded = $dateadded;

        return $this;
    }


}
