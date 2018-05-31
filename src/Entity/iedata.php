<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="iedata", schema="creditsafe", uniqueConstraints={@ORM\UniqueConstraint(name="iedata_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="App\Repository\iedataRepository")
 */
class iedata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.iedata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui1", type="string", nullable=true)
     */
    private $accountidUi1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber1", type="string", nullable=true)
     */
    private $customernumber1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname1", type="string", nullable=true)
     */
    private $accountname1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber1", type="string", nullable=true)
     */
    private $registrationnumber1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry1", type="string", nullable=true)
     */
    private $billingcountry1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince1", type="string", nullable=true)
     */
    private $billingstateprovince1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity1", type="string", nullable=true)
     */
    private $billingcity1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet1", type="string", nullable=true)
     */
    private $billingstreet1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode1", type="string", nullable=true)
     */
    private $billingzippostalcode1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber1", type="string", nullable=true)
     */
    private $vatnumber1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone1", type="string", nullable=true)
     */
    private $accountphone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname1", type="string", nullable=true)
     */
    private $firstname1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename1", type="string", nullable=true)
     */
    private $middlename1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname1", type="string", nullable=true)
     */
    private $lastname1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated1", type="string", nullable=true)
     */
    private $primaryemailupdated1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone1", type="string", nullable=true)
     */
    private $workphone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="algorythm", type="string", nullable=true)
     */
    private $algorythm;

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
     * @ORM\Column(name="dc_company_name", type="string", nullable=true)
     */
    private $dcCompanyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_type", type="string", nullable=true)
     */
    private $dcCompanyType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_inc_date", type="string", nullable=true)
     */
    private $dcIncDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_industry_desc", type="string", nullable=true)
     */
    private $dcIndustryDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sic_code", type="string", nullable=true)
     */
    private $dcSicCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sic_desc", type="string", nullable=true)
     */
    private $dcSicDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_employees", type="string", nullable=true)
     */
    private $dcEmployees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_address1", type="string", nullable=true)
     */
    private $dcAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_address2", type="string", nullable=true)
     */
    private $dcAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_address3", type="string", nullable=true)
     */
    private $dcAddress3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_address4", type="string", nullable=true)
     */
    private $dcAddress4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_postcode", type="string", nullable=true)
     */
    private $dcPostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_telephone", type="string", nullable=true)
     */
    private $dcTelephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ndd_flag", type="string", nullable=true)
     */
    private $dcNddFlag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_web", type="string", nullable=true)
     */
    private $dcWeb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_id", type="string", nullable=true)
     */
    private $dcGgsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_active", type="string", nullable=true)
     */
    private $dcIsActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_eircode", type="string", nullable=true)
     */
    private $dcEircode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_number", type="string", nullable=true)
     */
    private $dcBusinessNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_name", type="string", nullable=true)
     */
    private $dcBusinessName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_type", type="string", nullable=true)
     */
    private $dcBusinessType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_reg_date", type="string", nullable=true)
     */
    private $dcBusinessRegDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nature_of_business", type="string", nullable=true)
     */
    private $dcNatureOfBusiness;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_address1", type="string", nullable=true)
     */
    private $dcBusinessAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_address2", type="string", nullable=true)
     */
    private $dcBusinessAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_address3", type="string", nullable=true)
     */
    private $dcBusinessAddress3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_address4", type="string", nullable=true)
     */
    private $dcBusinessAddress4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_working_capital", type="string", nullable=true)
     */
    private $dcWorkingCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_assets", type="string", nullable=true)
     */
    private $dcNetAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_liabilities", type="string", nullable=true)
     */
    private $dcTotalLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_long_term_liabilities", type="string", nullable=true)
     */
    private $dcTotalLongTermLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_long_term_finance", type="string", nullable=true)
     */
    private $dcOtherLongTermFinance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_misc_current_liabilities", type="string", nullable=true)
     */
    private $dcMiscCurrentLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_short_term_fin", type="string", nullable=true)
     */
    private $dcOtherShortTermFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bank_overdraft", type="string", nullable=true)
     */
    private $dcBankOverdraft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_creditors", type="string", nullable=true)
     */
    private $dcTradeCreditors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_current_liabilities", type="string", nullable=true)
     */
    private $dcTotalCurrentLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_assets", type="string", nullable=true)
     */
    private $dcTotalAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_misc_current_assets", type="string", nullable=true)
     */
    private $dcMiscCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_current_assets", type="string", nullable=true)
     */
    private $dcOtherCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_debtors", type="string", nullable=true)
     */
    private $dcTradeDebtors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_current_assets", type="string", nullable=true)
     */
    private $dcTotalCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_fixed_assets", type="string", nullable=true)
     */
    private $dcTotalFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_intangible_assets", type="string", nullable=true)
     */
    private $dcIntangibleAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_tangible_assets", type="string", nullable=true)
     */
    private $dcTangibleAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_stocks", type="string", nullable=true)
     */
    private $dcStocks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_cash", type="string", nullable=true)
     */
    private $dcCash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_worth", type="string", nullable=true)
     */
    private $dcNetWorth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shareholders_funds", type="string", nullable=true)
     */
    private $dcShareholdersFunds;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_reevaluation_reserves", type="string", nullable=true)
     */
    private $dcReevaluationReserves;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sundry_reserves", type="string", nullable=true)
     */
    private $dcSundryReserves;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_profit_loss_account", type="string", nullable=true)
     */
    private $dcProfitLossAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paid_up_capital", type="string", nullable=true)
     */
    private $dcPaidUpCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accounts_type", type="string", nullable=true)
     */
    private $dcAccountsType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accounts_from", type="string", nullable=true)
     */
    private $dcAccountsFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_months", type="string", nullable=true)
     */
    private $dcMonths;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accounts_to", type="string", nullable=true)
     */
    private $dcAccountsTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_pre_tax_margin", type="string", nullable=true)
     */
    private $dcPreTaxMargin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_retained_profits", type="string", nullable=true)
     */
    private $dcRetainedProfits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_dividends_payable", type="string", nullable=true)
     */
    private $dcDividendsPayable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_post_tax_profit", type="string", nullable=true)
     */
    private $dcPostTaxProfit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_taxation", type="string", nullable=true)
     */
    private $dcTaxation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_pre_tax_profit", type="string", nullable=true)
     */
    private $dcPreTaxProfit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_interest_payments", type="string", nullable=true)
     */
    private $dcInterestPayments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_currency", type="string", nullable=true)
     */
    private $dcCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_consolidated_accounts", type="string", nullable=true)
     */
    private $dcConsolidatedAccounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_turnover", type="string", nullable=true)
     */
    private $dcTurnover;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_exports", type="string", nullable=true)
     */
    private $dcExports;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_cost_of_sales", type="string", nullable=true)
     */
    private $dcCostOfSales;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_gross_profit", type="string", nullable=true)
     */
    private $dcGrossProfit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_wages_and_salaries", type="string", nullable=true)
     */
    private $dcWagesAndSalaries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_directors_emoluments", type="string", nullable=true)
     */
    private $dcDirectorsEmoluments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_operating_profit", type="string", nullable=true)
     */
    private $dcOperatingProfit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_depreciation", type="string", nullable=true)
     */
    private $dcDepreciation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_audit_fees", type="string", nullable=true)
     */
    private $dcAuditFees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_current_ratio", type="string", nullable=true)
     */
    private $dcCurrentRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_working_capital", type="string", nullable=true)
     */
    private $dcNetWorkingCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_gearing_ratio", type="string", nullable=true)
     */
    private $dcGearingRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_creditor_days", type="string", nullable=true)
     */
    private $dcCreditorDays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_liquidity_acid_test", type="string", nullable=true)
     */
    private $dcLiquidityAcidTest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_return_capital_employed", type="string", nullable=true)
     */
    private $dcReturnCapitalEmployed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_return_total_assets_employed", type="string", nullable=true)
     */
    private $dcReturnTotalAssetsEmployed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_current_debt_ratio", type="string", nullable=true)
     */
    private $dcCurrentDebtRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_debt_ratio", type="string", nullable=true)
     */
    private $dcTotalDebtRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_stock_turnover_ratio", type="string", nullable=true)
     */
    private $dcStockTurnoverRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_return_net_assets", type="string", nullable=true)
     */
    private $dcReturnNetAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_cash_flow_from_operations", type="string", nullable=true)
     */
    private $dcNetCashFlowFromOperations;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_cash_flow_before_financing", type="string", nullable=true)
     */
    private $dcNetCashFlowBeforeFinancing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_cash_flow_from_financing", type="string", nullable=true)
     */
    private $dcNetCashFlowFromFinancing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_auditors_qualification", type="string", nullable=true)
     */
    private $dcAuditorsQualification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_auditors", type="string", nullable=true)
     */
    private $dcAuditors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_capital_employed", type="string", nullable=true)
     */
    private $dcCapitalEmployed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contingent_liability", type="string", nullable=true)
     */
    private $dcContingentLiability;

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
     * @ORM\Column(name="dc_international_rating_class", type="string", nullable=true)
     */
    private $dcInternationalRatingClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_cj_value_numeric", type="string", nullable=true)
     */
    private $dcCjValueNumeric;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_cj_counts_numeric", type="string", nullable=true)
     */
    private $dcCjCountsNumeric;

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
     * @ORM\Column(name="dc_contact_position", type="string", nullable=true)
     */
    private $dcContactPosition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_dob", type="string", nullable=true)
     */
    private $dcContactDob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_owner_name", type="string", nullable=true)
     */
    private $dcOwnerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_duplicate", type="string", nullable=true)
     */
    private $dcIsDuplicate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_primary_dupe", type="string", nullable=true)
     */
    private $dcIsPrimaryDupe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_primary_dupe_id", type="string", nullable=true)
     */
    private $dcPrimaryDupeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_duplicate_rule", type="string", nullable=true)
     */
    private $dcDuplicateRule;

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

    public function getAccountidUi1(): ?string
    {
        return $this->accountidUi1;
    }

    public function setAccountidUi1(?string $accountidUi1): self
    {
        $this->accountidUi1 = $accountidUi1;

        return $this;
    }

    public function getCustomernumber1(): ?string
    {
        return $this->customernumber1;
    }

    public function setCustomernumber1(?string $customernumber1): self
    {
        $this->customernumber1 = $customernumber1;

        return $this;
    }

    public function getAccountname1(): ?string
    {
        return $this->accountname1;
    }

    public function setAccountname1(?string $accountname1): self
    {
        $this->accountname1 = $accountname1;

        return $this;
    }

    public function getRegistrationnumber1(): ?string
    {
        return $this->registrationnumber1;
    }

    public function setRegistrationnumber1(?string $registrationnumber1): self
    {
        $this->registrationnumber1 = $registrationnumber1;

        return $this;
    }

    public function getBillingcountry1(): ?string
    {
        return $this->billingcountry1;
    }

    public function setBillingcountry1(?string $billingcountry1): self
    {
        $this->billingcountry1 = $billingcountry1;

        return $this;
    }

    public function getBillingstateprovince1(): ?string
    {
        return $this->billingstateprovince1;
    }

    public function setBillingstateprovince1(?string $billingstateprovince1): self
    {
        $this->billingstateprovince1 = $billingstateprovince1;

        return $this;
    }

    public function getBillingcity1(): ?string
    {
        return $this->billingcity1;
    }

    public function setBillingcity1(?string $billingcity1): self
    {
        $this->billingcity1 = $billingcity1;

        return $this;
    }

    public function getBillingstreet1(): ?string
    {
        return $this->billingstreet1;
    }

    public function setBillingstreet1(?string $billingstreet1): self
    {
        $this->billingstreet1 = $billingstreet1;

        return $this;
    }

    public function getBillingzippostalcode1(): ?string
    {
        return $this->billingzippostalcode1;
    }

    public function setBillingzippostalcode1(?string $billingzippostalcode1): self
    {
        $this->billingzippostalcode1 = $billingzippostalcode1;

        return $this;
    }

    public function getVatnumber1(): ?string
    {
        return $this->vatnumber1;
    }

    public function setVatnumber1(?string $vatnumber1): self
    {
        $this->vatnumber1 = $vatnumber1;

        return $this;
    }

    public function getAccountphone1(): ?string
    {
        return $this->accountphone1;
    }

    public function setAccountphone1(?string $accountphone1): self
    {
        $this->accountphone1 = $accountphone1;

        return $this;
    }

    public function getFirstname1(): ?string
    {
        return $this->firstname1;
    }

    public function setFirstname1(?string $firstname1): self
    {
        $this->firstname1 = $firstname1;

        return $this;
    }

    public function getMiddlename1(): ?string
    {
        return $this->middlename1;
    }

    public function setMiddlename1(?string $middlename1): self
    {
        $this->middlename1 = $middlename1;

        return $this;
    }

    public function getLastname1(): ?string
    {
        return $this->lastname1;
    }

    public function setLastname1(?string $lastname1): self
    {
        $this->lastname1 = $lastname1;

        return $this;
    }

    public function getPrimaryemailupdated1(): ?string
    {
        return $this->primaryemailupdated1;
    }

    public function setPrimaryemailupdated1(?string $primaryemailupdated1): self
    {
        $this->primaryemailupdated1 = $primaryemailupdated1;

        return $this;
    }

    public function getWorkphone1(): ?string
    {
        return $this->workphone1;
    }

    public function setWorkphone1(?string $workphone1): self
    {
        $this->workphone1 = $workphone1;

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

    public function getDcCompanyName(): ?string
    {
        return $this->dcCompanyName;
    }

    public function setDcCompanyName(?string $dcCompanyName): self
    {
        $this->dcCompanyName = $dcCompanyName;

        return $this;
    }

    public function getDcCompanyType(): ?string
    {
        return $this->dcCompanyType;
    }

    public function setDcCompanyType(?string $dcCompanyType): self
    {
        $this->dcCompanyType = $dcCompanyType;

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

    public function getDcIndustryDesc(): ?string
    {
        return $this->dcIndustryDesc;
    }

    public function setDcIndustryDesc(?string $dcIndustryDesc): self
    {
        $this->dcIndustryDesc = $dcIndustryDesc;

        return $this;
    }

    public function getDcSicCode(): ?string
    {
        return $this->dcSicCode;
    }

    public function setDcSicCode(?string $dcSicCode): self
    {
        $this->dcSicCode = $dcSicCode;

        return $this;
    }

    public function getDcSicDesc(): ?string
    {
        return $this->dcSicDesc;
    }

    public function setDcSicDesc(?string $dcSicDesc): self
    {
        $this->dcSicDesc = $dcSicDesc;

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

    public function getDcAddress1(): ?string
    {
        return $this->dcAddress1;
    }

    public function setDcAddress1(?string $dcAddress1): self
    {
        $this->dcAddress1 = $dcAddress1;

        return $this;
    }

    public function getDcAddress2(): ?string
    {
        return $this->dcAddress2;
    }

    public function setDcAddress2(?string $dcAddress2): self
    {
        $this->dcAddress2 = $dcAddress2;

        return $this;
    }

    public function getDcAddress3(): ?string
    {
        return $this->dcAddress3;
    }

    public function setDcAddress3(?string $dcAddress3): self
    {
        $this->dcAddress3 = $dcAddress3;

        return $this;
    }

    public function getDcAddress4(): ?string
    {
        return $this->dcAddress4;
    }

    public function setDcAddress4(?string $dcAddress4): self
    {
        $this->dcAddress4 = $dcAddress4;

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

    public function getDcTelephone(): ?string
    {
        return $this->dcTelephone;
    }

    public function setDcTelephone(?string $dcTelephone): self
    {
        $this->dcTelephone = $dcTelephone;

        return $this;
    }

    public function getDcNddFlag(): ?string
    {
        return $this->dcNddFlag;
    }

    public function setDcNddFlag(?string $dcNddFlag): self
    {
        $this->dcNddFlag = $dcNddFlag;

        return $this;
    }

    public function getDcWeb(): ?string
    {
        return $this->dcWeb;
    }

    public function setDcWeb(?string $dcWeb): self
    {
        $this->dcWeb = $dcWeb;

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

    public function getDcIsActive(): ?string
    {
        return $this->dcIsActive;
    }

    public function setDcIsActive(?string $dcIsActive): self
    {
        $this->dcIsActive = $dcIsActive;

        return $this;
    }

    public function getDcEircode(): ?string
    {
        return $this->dcEircode;
    }

    public function setDcEircode(?string $dcEircode): self
    {
        $this->dcEircode = $dcEircode;

        return $this;
    }

    public function getDcBusinessNumber(): ?string
    {
        return $this->dcBusinessNumber;
    }

    public function setDcBusinessNumber(?string $dcBusinessNumber): self
    {
        $this->dcBusinessNumber = $dcBusinessNumber;

        return $this;
    }

    public function getDcBusinessName(): ?string
    {
        return $this->dcBusinessName;
    }

    public function setDcBusinessName(?string $dcBusinessName): self
    {
        $this->dcBusinessName = $dcBusinessName;

        return $this;
    }

    public function getDcBusinessType(): ?string
    {
        return $this->dcBusinessType;
    }

    public function setDcBusinessType(?string $dcBusinessType): self
    {
        $this->dcBusinessType = $dcBusinessType;

        return $this;
    }

    public function getDcBusinessRegDate(): ?string
    {
        return $this->dcBusinessRegDate;
    }

    public function setDcBusinessRegDate(?string $dcBusinessRegDate): self
    {
        $this->dcBusinessRegDate = $dcBusinessRegDate;

        return $this;
    }

    public function getDcNatureOfBusiness(): ?string
    {
        return $this->dcNatureOfBusiness;
    }

    public function setDcNatureOfBusiness(?string $dcNatureOfBusiness): self
    {
        $this->dcNatureOfBusiness = $dcNatureOfBusiness;

        return $this;
    }

    public function getDcBusinessAddress1(): ?string
    {
        return $this->dcBusinessAddress1;
    }

    public function setDcBusinessAddress1(?string $dcBusinessAddress1): self
    {
        $this->dcBusinessAddress1 = $dcBusinessAddress1;

        return $this;
    }

    public function getDcBusinessAddress2(): ?string
    {
        return $this->dcBusinessAddress2;
    }

    public function setDcBusinessAddress2(?string $dcBusinessAddress2): self
    {
        $this->dcBusinessAddress2 = $dcBusinessAddress2;

        return $this;
    }

    public function getDcBusinessAddress3(): ?string
    {
        return $this->dcBusinessAddress3;
    }

    public function setDcBusinessAddress3(?string $dcBusinessAddress3): self
    {
        $this->dcBusinessAddress3 = $dcBusinessAddress3;

        return $this;
    }

    public function getDcBusinessAddress4(): ?string
    {
        return $this->dcBusinessAddress4;
    }

    public function setDcBusinessAddress4(?string $dcBusinessAddress4): self
    {
        $this->dcBusinessAddress4 = $dcBusinessAddress4;

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

    public function getDcNetAssets(): ?string
    {
        return $this->dcNetAssets;
    }

    public function setDcNetAssets(?string $dcNetAssets): self
    {
        $this->dcNetAssets = $dcNetAssets;

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

    public function getDcTotalLongTermLiabilities(): ?string
    {
        return $this->dcTotalLongTermLiabilities;
    }

    public function setDcTotalLongTermLiabilities(?string $dcTotalLongTermLiabilities): self
    {
        $this->dcTotalLongTermLiabilities = $dcTotalLongTermLiabilities;

        return $this;
    }

    public function getDcOtherLongTermFinance(): ?string
    {
        return $this->dcOtherLongTermFinance;
    }

    public function setDcOtherLongTermFinance(?string $dcOtherLongTermFinance): self
    {
        $this->dcOtherLongTermFinance = $dcOtherLongTermFinance;

        return $this;
    }

    public function getDcMiscCurrentLiabilities(): ?string
    {
        return $this->dcMiscCurrentLiabilities;
    }

    public function setDcMiscCurrentLiabilities(?string $dcMiscCurrentLiabilities): self
    {
        $this->dcMiscCurrentLiabilities = $dcMiscCurrentLiabilities;

        return $this;
    }

    public function getDcOtherShortTermFin(): ?string
    {
        return $this->dcOtherShortTermFin;
    }

    public function setDcOtherShortTermFin(?string $dcOtherShortTermFin): self
    {
        $this->dcOtherShortTermFin = $dcOtherShortTermFin;

        return $this;
    }

    public function getDcBankOverdraft(): ?string
    {
        return $this->dcBankOverdraft;
    }

    public function setDcBankOverdraft(?string $dcBankOverdraft): self
    {
        $this->dcBankOverdraft = $dcBankOverdraft;

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

    public function getDcTotalCurrentLiabilities(): ?string
    {
        return $this->dcTotalCurrentLiabilities;
    }

    public function setDcTotalCurrentLiabilities(?string $dcTotalCurrentLiabilities): self
    {
        $this->dcTotalCurrentLiabilities = $dcTotalCurrentLiabilities;

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

    public function getDcMiscCurrentAssets(): ?string
    {
        return $this->dcMiscCurrentAssets;
    }

    public function setDcMiscCurrentAssets(?string $dcMiscCurrentAssets): self
    {
        $this->dcMiscCurrentAssets = $dcMiscCurrentAssets;

        return $this;
    }

    public function getDcOtherCurrentAssets(): ?string
    {
        return $this->dcOtherCurrentAssets;
    }

    public function setDcOtherCurrentAssets(?string $dcOtherCurrentAssets): self
    {
        $this->dcOtherCurrentAssets = $dcOtherCurrentAssets;

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

    public function getDcTotalCurrentAssets(): ?string
    {
        return $this->dcTotalCurrentAssets;
    }

    public function setDcTotalCurrentAssets(?string $dcTotalCurrentAssets): self
    {
        $this->dcTotalCurrentAssets = $dcTotalCurrentAssets;

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

    public function getDcIntangibleAssets(): ?string
    {
        return $this->dcIntangibleAssets;
    }

    public function setDcIntangibleAssets(?string $dcIntangibleAssets): self
    {
        $this->dcIntangibleAssets = $dcIntangibleAssets;

        return $this;
    }

    public function getDcTangibleAssets(): ?string
    {
        return $this->dcTangibleAssets;
    }

    public function setDcTangibleAssets(?string $dcTangibleAssets): self
    {
        $this->dcTangibleAssets = $dcTangibleAssets;

        return $this;
    }

    public function getDcStocks(): ?string
    {
        return $this->dcStocks;
    }

    public function setDcStocks(?string $dcStocks): self
    {
        $this->dcStocks = $dcStocks;

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

    public function getDcNetWorth(): ?string
    {
        return $this->dcNetWorth;
    }

    public function setDcNetWorth(?string $dcNetWorth): self
    {
        $this->dcNetWorth = $dcNetWorth;

        return $this;
    }

    public function getDcShareholdersFunds(): ?string
    {
        return $this->dcShareholdersFunds;
    }

    public function setDcShareholdersFunds(?string $dcShareholdersFunds): self
    {
        $this->dcShareholdersFunds = $dcShareholdersFunds;

        return $this;
    }

    public function getDcReevaluationReserves(): ?string
    {
        return $this->dcReevaluationReserves;
    }

    public function setDcReevaluationReserves(?string $dcReevaluationReserves): self
    {
        $this->dcReevaluationReserves = $dcReevaluationReserves;

        return $this;
    }

    public function getDcSundryReserves(): ?string
    {
        return $this->dcSundryReserves;
    }

    public function setDcSundryReserves(?string $dcSundryReserves): self
    {
        $this->dcSundryReserves = $dcSundryReserves;

        return $this;
    }

    public function getDcProfitLossAccount(): ?string
    {
        return $this->dcProfitLossAccount;
    }

    public function setDcProfitLossAccount(?string $dcProfitLossAccount): self
    {
        $this->dcProfitLossAccount = $dcProfitLossAccount;

        return $this;
    }

    public function getDcPaidUpCapital(): ?string
    {
        return $this->dcPaidUpCapital;
    }

    public function setDcPaidUpCapital(?string $dcPaidUpCapital): self
    {
        $this->dcPaidUpCapital = $dcPaidUpCapital;

        return $this;
    }

    public function getDcAccountsType(): ?string
    {
        return $this->dcAccountsType;
    }

    public function setDcAccountsType(?string $dcAccountsType): self
    {
        $this->dcAccountsType = $dcAccountsType;

        return $this;
    }

    public function getDcAccountsFrom(): ?string
    {
        return $this->dcAccountsFrom;
    }

    public function setDcAccountsFrom(?string $dcAccountsFrom): self
    {
        $this->dcAccountsFrom = $dcAccountsFrom;

        return $this;
    }

    public function getDcMonths(): ?string
    {
        return $this->dcMonths;
    }

    public function setDcMonths(?string $dcMonths): self
    {
        $this->dcMonths = $dcMonths;

        return $this;
    }

    public function getDcAccountsTo(): ?string
    {
        return $this->dcAccountsTo;
    }

    public function setDcAccountsTo(?string $dcAccountsTo): self
    {
        $this->dcAccountsTo = $dcAccountsTo;

        return $this;
    }

    public function getDcPreTaxMargin(): ?string
    {
        return $this->dcPreTaxMargin;
    }

    public function setDcPreTaxMargin(?string $dcPreTaxMargin): self
    {
        $this->dcPreTaxMargin = $dcPreTaxMargin;

        return $this;
    }

    public function getDcRetainedProfits(): ?string
    {
        return $this->dcRetainedProfits;
    }

    public function setDcRetainedProfits(?string $dcRetainedProfits): self
    {
        $this->dcRetainedProfits = $dcRetainedProfits;

        return $this;
    }

    public function getDcDividendsPayable(): ?string
    {
        return $this->dcDividendsPayable;
    }

    public function setDcDividendsPayable(?string $dcDividendsPayable): self
    {
        $this->dcDividendsPayable = $dcDividendsPayable;

        return $this;
    }

    public function getDcPostTaxProfit(): ?string
    {
        return $this->dcPostTaxProfit;
    }

    public function setDcPostTaxProfit(?string $dcPostTaxProfit): self
    {
        $this->dcPostTaxProfit = $dcPostTaxProfit;

        return $this;
    }

    public function getDcTaxation(): ?string
    {
        return $this->dcTaxation;
    }

    public function setDcTaxation(?string $dcTaxation): self
    {
        $this->dcTaxation = $dcTaxation;

        return $this;
    }

    public function getDcPreTaxProfit(): ?string
    {
        return $this->dcPreTaxProfit;
    }

    public function setDcPreTaxProfit(?string $dcPreTaxProfit): self
    {
        $this->dcPreTaxProfit = $dcPreTaxProfit;

        return $this;
    }

    public function getDcInterestPayments(): ?string
    {
        return $this->dcInterestPayments;
    }

    public function setDcInterestPayments(?string $dcInterestPayments): self
    {
        $this->dcInterestPayments = $dcInterestPayments;

        return $this;
    }

    public function getDcCurrency(): ?string
    {
        return $this->dcCurrency;
    }

    public function setDcCurrency(?string $dcCurrency): self
    {
        $this->dcCurrency = $dcCurrency;

        return $this;
    }

    public function getDcConsolidatedAccounts(): ?string
    {
        return $this->dcConsolidatedAccounts;
    }

    public function setDcConsolidatedAccounts(?string $dcConsolidatedAccounts): self
    {
        $this->dcConsolidatedAccounts = $dcConsolidatedAccounts;

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

    public function getDcExports(): ?string
    {
        return $this->dcExports;
    }

    public function setDcExports(?string $dcExports): self
    {
        $this->dcExports = $dcExports;

        return $this;
    }

    public function getDcCostOfSales(): ?string
    {
        return $this->dcCostOfSales;
    }

    public function setDcCostOfSales(?string $dcCostOfSales): self
    {
        $this->dcCostOfSales = $dcCostOfSales;

        return $this;
    }

    public function getDcGrossProfit(): ?string
    {
        return $this->dcGrossProfit;
    }

    public function setDcGrossProfit(?string $dcGrossProfit): self
    {
        $this->dcGrossProfit = $dcGrossProfit;

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

    public function getDcDirectorsEmoluments(): ?string
    {
        return $this->dcDirectorsEmoluments;
    }

    public function setDcDirectorsEmoluments(?string $dcDirectorsEmoluments): self
    {
        $this->dcDirectorsEmoluments = $dcDirectorsEmoluments;

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

    public function getDcDepreciation(): ?string
    {
        return $this->dcDepreciation;
    }

    public function setDcDepreciation(?string $dcDepreciation): self
    {
        $this->dcDepreciation = $dcDepreciation;

        return $this;
    }

    public function getDcAuditFees(): ?string
    {
        return $this->dcAuditFees;
    }

    public function setDcAuditFees(?string $dcAuditFees): self
    {
        $this->dcAuditFees = $dcAuditFees;

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

    public function getDcNetWorkingCapital(): ?string
    {
        return $this->dcNetWorkingCapital;
    }

    public function setDcNetWorkingCapital(?string $dcNetWorkingCapital): self
    {
        $this->dcNetWorkingCapital = $dcNetWorkingCapital;

        return $this;
    }

    public function getDcGearingRatio(): ?string
    {
        return $this->dcGearingRatio;
    }

    public function setDcGearingRatio(?string $dcGearingRatio): self
    {
        $this->dcGearingRatio = $dcGearingRatio;

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

    public function getDcLiquidityAcidTest(): ?string
    {
        return $this->dcLiquidityAcidTest;
    }

    public function setDcLiquidityAcidTest(?string $dcLiquidityAcidTest): self
    {
        $this->dcLiquidityAcidTest = $dcLiquidityAcidTest;

        return $this;
    }

    public function getDcReturnCapitalEmployed(): ?string
    {
        return $this->dcReturnCapitalEmployed;
    }

    public function setDcReturnCapitalEmployed(?string $dcReturnCapitalEmployed): self
    {
        $this->dcReturnCapitalEmployed = $dcReturnCapitalEmployed;

        return $this;
    }

    public function getDcReturnTotalAssetsEmployed(): ?string
    {
        return $this->dcReturnTotalAssetsEmployed;
    }

    public function setDcReturnTotalAssetsEmployed(?string $dcReturnTotalAssetsEmployed): self
    {
        $this->dcReturnTotalAssetsEmployed = $dcReturnTotalAssetsEmployed;

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

    public function getDcTotalDebtRatio(): ?string
    {
        return $this->dcTotalDebtRatio;
    }

    public function setDcTotalDebtRatio(?string $dcTotalDebtRatio): self
    {
        $this->dcTotalDebtRatio = $dcTotalDebtRatio;

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

    public function getDcReturnNetAssets(): ?string
    {
        return $this->dcReturnNetAssets;
    }

    public function setDcReturnNetAssets(?string $dcReturnNetAssets): self
    {
        $this->dcReturnNetAssets = $dcReturnNetAssets;

        return $this;
    }

    public function getDcNetCashFlowFromOperations(): ?string
    {
        return $this->dcNetCashFlowFromOperations;
    }

    public function setDcNetCashFlowFromOperations(?string $dcNetCashFlowFromOperations): self
    {
        $this->dcNetCashFlowFromOperations = $dcNetCashFlowFromOperations;

        return $this;
    }

    public function getDcNetCashFlowBeforeFinancing(): ?string
    {
        return $this->dcNetCashFlowBeforeFinancing;
    }

    public function setDcNetCashFlowBeforeFinancing(?string $dcNetCashFlowBeforeFinancing): self
    {
        $this->dcNetCashFlowBeforeFinancing = $dcNetCashFlowBeforeFinancing;

        return $this;
    }

    public function getDcNetCashFlowFromFinancing(): ?string
    {
        return $this->dcNetCashFlowFromFinancing;
    }

    public function setDcNetCashFlowFromFinancing(?string $dcNetCashFlowFromFinancing): self
    {
        $this->dcNetCashFlowFromFinancing = $dcNetCashFlowFromFinancing;

        return $this;
    }

    public function getDcAuditorsQualification(): ?string
    {
        return $this->dcAuditorsQualification;
    }

    public function setDcAuditorsQualification(?string $dcAuditorsQualification): self
    {
        $this->dcAuditorsQualification = $dcAuditorsQualification;

        return $this;
    }

    public function getDcAuditors(): ?string
    {
        return $this->dcAuditors;
    }

    public function setDcAuditors(?string $dcAuditors): self
    {
        $this->dcAuditors = $dcAuditors;

        return $this;
    }

    public function getDcCapitalEmployed(): ?string
    {
        return $this->dcCapitalEmployed;
    }

    public function setDcCapitalEmployed(?string $dcCapitalEmployed): self
    {
        $this->dcCapitalEmployed = $dcCapitalEmployed;

        return $this;
    }

    public function getDcContingentLiability(): ?string
    {
        return $this->dcContingentLiability;
    }

    public function setDcContingentLiability(?string $dcContingentLiability): self
    {
        $this->dcContingentLiability = $dcContingentLiability;

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

    public function getDcInternationalRatingClass(): ?string
    {
        return $this->dcInternationalRatingClass;
    }

    public function setDcInternationalRatingClass(?string $dcInternationalRatingClass): self
    {
        $this->dcInternationalRatingClass = $dcInternationalRatingClass;

        return $this;
    }

    public function getDcCjValueNumeric(): ?string
    {
        return $this->dcCjValueNumeric;
    }

    public function setDcCjValueNumeric(?string $dcCjValueNumeric): self
    {
        $this->dcCjValueNumeric = $dcCjValueNumeric;

        return $this;
    }

    public function getDcCjCountsNumeric(): ?string
    {
        return $this->dcCjCountsNumeric;
    }

    public function setDcCjCountsNumeric(?string $dcCjCountsNumeric): self
    {
        $this->dcCjCountsNumeric = $dcCjCountsNumeric;

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

    public function getDcContactPosition(): ?string
    {
        return $this->dcContactPosition;
    }

    public function setDcContactPosition(?string $dcContactPosition): self
    {
        $this->dcContactPosition = $dcContactPosition;

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

    public function getDcOwnerName(): ?string
    {
        return $this->dcOwnerName;
    }

    public function setDcOwnerName(?string $dcOwnerName): self
    {
        $this->dcOwnerName = $dcOwnerName;

        return $this;
    }

    public function getDcIsDuplicate(): ?string
    {
        return $this->dcIsDuplicate;
    }

    public function setDcIsDuplicate(?string $dcIsDuplicate): self
    {
        $this->dcIsDuplicate = $dcIsDuplicate;

        return $this;
    }

    public function getDcIsPrimaryDupe(): ?string
    {
        return $this->dcIsPrimaryDupe;
    }

    public function setDcIsPrimaryDupe(?string $dcIsPrimaryDupe): self
    {
        $this->dcIsPrimaryDupe = $dcIsPrimaryDupe;

        return $this;
    }

    public function getDcPrimaryDupeId(): ?string
    {
        return $this->dcPrimaryDupeId;
    }

    public function setDcPrimaryDupeId(?string $dcPrimaryDupeId): self
    {
        $this->dcPrimaryDupeId = $dcPrimaryDupeId;

        return $this;
    }

    public function getDcDuplicateRule(): ?string
    {
        return $this->dcDuplicateRule;
    }

    public function setDcDuplicateRule(?string $dcDuplicateRule): self
    {
        $this->dcDuplicateRule = $dcDuplicateRule;

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
