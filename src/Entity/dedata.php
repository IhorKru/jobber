<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="dedata", schema="creditsafe", uniqueConstraints={@ORM\UniqueConstraint(name="dedata_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="App\Repository\dedataRepository")
 */
class dedata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.dedata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui9", type="string", nullable=true)
     */
    private $accountidUi9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber8", type="string", nullable=true)
     */
    private $customernumber8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname8", type="string", nullable=true)
     */
    private $accountname8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber8", type="string", nullable=true)
     */
    private $registrationnumber8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry8", type="string", nullable=true)
     */
    private $billingcountry8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince8", type="string", nullable=true)
     */
    private $billingstateprovince8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity8", type="string", nullable=true)
     */
    private $billingcity8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet8", type="string", nullable=true)
     */
    private $billingstreet8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode8", type="string", nullable=true)
     */
    private $billingzippostalcode8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber8", type="string", nullable=true)
     */
    private $vatnumber8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone8", type="string", nullable=true)
     */
    private $accountphone8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname8", type="string", nullable=true)
     */
    private $firstname8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename8", type="string", nullable=true)
     */
    private $middlename8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname8", type="string", nullable=true)
     */
    private $lastname8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated8", type="string", nullable=true)
     */
    private $primaryemailupdated8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone8", type="string", nullable=true)
     */
    private $workphone8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_safe_number", type="string", nullable=true)
     */
    private $dcSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_id", type="string", nullable=true)
     */
    private $dcCompanyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_company_id", type="string", nullable=true)
     */
    private $dcGgsCompanyId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_name", type="string", nullable=true)
     */
    private $dcBusinessName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_former_company_name", type="string", nullable=true)
     */
    private $dcFormerCompanyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_address", type="string", nullable=true)
     */
    private $dcAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_zip_code", type="string", nullable=true)
     */
    private $dcZipCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_city", type="string", nullable=true)
     */
    private $dcCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bts_co_country_region", type="string", nullable=true)
     */
    private $btsCoCountryRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_status", type="string", nullable=true)
     */
    private $dcStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_legal_form", type="string", nullable=true)
     */
    private $dcLegalForm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_register_id", type="string", nullable=true)
     */
    private $dcTradeRegisterId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_register_city", type="string", nullable=true)
     */
    private $dcTradeRegisterCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_share_capital", type="string", nullable=true)
     */
    private $dcShareCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_foundation_date", type="string", nullable=true)
     */
    private $dcFoundationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_phone_number", type="string", nullable=true)
     */
    private $dcPhoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_fax", type="string", nullable=true)
     */
    private $dcFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_url", type="string", nullable=true)
     */
    private $dcUrl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_e_mail", type="string", nullable=true)
     */
    private $dcEMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bank_code", type="string", nullable=true)
     */
    private $dcBankCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bank_name", type="string", nullable=true)
     */
    private $dcBankName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_wz2008", type="string", nullable=true)
     */
    private $dcWz2008;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_industry_description", type="string", nullable=true)
     */
    private $dcIndustryDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bts_co_employee_size", type="string", nullable=true)
     */
    private $btsCoEmployeeSize;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_est_annual_sales_amount", type="string", nullable=true)
     */
    private $dcEstAnnualSalesAmount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_vat", type="string", nullable=true)
     */
    private $dcVat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_score_international", type="string", nullable=true)
     */
    private $dcScoreInternational;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_rating", type="string", nullable=true)
     */
    private $dcCreditRating;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_limit", type="string", nullable=true)
     */
    private $dcCreditLimit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_international_score", type="string", nullable=true)
     */
    private $dcInternationalScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_managing_directors", type="string", nullable=true)
     */
    private $dcManagingDirectors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_director_with_signing_authority", type="string", nullable=true)
     */
    private $dcDirectorWithSigningAuthority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shareholders", type="string", nullable=true)
     */
    private $dcShareholders;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ultimate_holding", type="string", nullable=true)
     */
    private $dcUltimateHolding;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_direct_holding", type="string", nullable=true)
     */
    private $dcDirectHolding;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_complementary_dirs", type="string", nullable=true)
     */
    private $dcComplementaryDirs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accounting_date", type="string", nullable=true)
     */
    private $dcAccountingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_duration_in_weeks", type="string", nullable=true)
     */
    private $dcDurationInWeeks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_currency", type="string", nullable=true)
     */
    private $dcCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_consolidated_account", type="string", nullable=true)
     */
    private $dcConsolidatedAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_a_assets", type="string", nullable=true)
     */
    private $dcAAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_i_intangible_assets", type="string", nullable=true)
     */
    private $dcIIntangibleAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ii_fixed_assets_long_term_assets", type="string", nullable=true)
     */
    private $dcIiFixedAssetsLongTermAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_iii_financial_assets", type="string", nullable=true)
     */
    private $dcIiiFinancialAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_b_current_assets", type="string", nullable=true)
     */
    private $dcBCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_i_inventory", type="string", nullable=true)
     */
    private $dcIInventory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ii_receivabls_other_assets", type="string", nullable=true)
     */
    private $dcIiReceivablsOtherAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_receivables", type="string", nullable=true)
     */
    private $dcTradeReceivables;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_iii_securities", type="string", nullable=true)
     */
    private $dcIiiSecurities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_iv_liquid_assets", type="string", nullable=true)
     */
    private $dcIvLiquidAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_c_prepaid_expenses", type="string", nullable=true)
     */
    private $dcCPrepaidExpenses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_d_defered_tax", type="string", nullable=true)
     */
    private $dcDDeferedTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_e_active_diff", type="string", nullable=true)
     */
    private $dcEActiveDiff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deficit_not_covered_by_capital_2", type="string", nullable=true)
     */
    private $deficitNotCoveredByCapital2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deficit_not_covered_by_capital_1", type="string", nullable=true)
     */
    private $deficitNotCoveredByCapital1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_balance_sheet_total_activa", type="string", nullable=true)
     */
    private $dcBalanceSheetTotalActiva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_a_equity", type="string", nullable=true)
     */
    private $dcAEquity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_i_subscribed_capital", type="string", nullable=true)
     */
    private $dcISubscribedCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_private_account", type="string", nullable=true)
     */
    private $dcPrivateAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shares_capital_unlimited_part", type="string", nullable=true)
     */
    private $dcSharesCapitalUnlimitedPart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shares_capital_limited_part", type="string", nullable=true)
     */
    private $dcSharesCapitalLimitedPart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_fixed_equity", type="string", nullable=true)
     */
    private $dcFixedEquity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_variable_equity", type="string", nullable=true)
     */
    private $dcVariableEquity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ii_capital_reserve", type="string", nullable=true)
     */
    private $dcIiCapitalReserve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_iii_revenue_reserve", type="string", nullable=true)
     */
    private $dcIiiRevenueReserve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_iv_retained_earnings", type="string", nullable=true)
     */
    private $dcIvRetainedEarnings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_v_net_income", type="string", nullable=true)
     */
    private $dcVNetIncome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_profit_loss", type="string", nullable=true)
     */
    private $dcProfitLoss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_b_accruals", type="string", nullable=true)
     */
    private $dcBAccruals;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accruals_for_pension", type="string", nullable=true)
     */
    private $dcAccrualsForPension;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accruals_for_tax", type="string", nullable=true)
     */
    private $dcAccrualsForTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_c_liabilities", type="string", nullable=true)
     */
    private $dcCLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_payables", type="string", nullable=true)
     */
    private $dcTradePayables;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_d_deferred_income", type="string", nullable=true)
     */
    private $dcDDeferredIncome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_e_deferred_tax_liabilities", type="string", nullable=true)
     */
    private $dcEDeferredTaxLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_balance_sheet_total_passiva", type="string", nullable=true)
     */
    private $dcBalanceSheetTotalPassiva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_turnover", type="string", nullable=true)
     */
    private $dcTurnover;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_inventory_change", type="string", nullable=true)
     */
    private $dcInventoryChange;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_own_work", type="string", nullable=true)
     */
    private $dcOwnWork;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_oth_op_revenue", type="string", nullable=true)
     */
    private $dcOthOpRevenue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_material", type="string", nullable=true)
     */
    private $dcMaterial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_gross_profit", type="string", nullable=true)
     */
    private $dcGrossProfit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_staff", type="string", nullable=true)
     */
    private $dcStaff;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_amortisation", type="string", nullable=true)
     */
    private $dcAmortisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_costs", type="string", nullable=true)
     */
    private $dcOtherCosts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_operational_result", type="string", nullable=true)
     */
    private $dcOperationalResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_oth_int_similar_income", type="string", nullable=true)
     */
    private $dcOthIntSimilarIncome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_int_similar_expenses", type="string", nullable=true)
     */
    private $dcIntSimilarExpenses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_financial_result", type="string", nullable=true)
     */
    private $dcFinancialResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ord_op_result", type="string", nullable=true)
     */
    private $dcOrdOpResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_extraordinary_result", type="string", nullable=true)
     */
    private $dcExtraordinaryResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_tax", type="string", nullable=true)
     */
    private $dcTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_other_taxes", type="string", nullable=true)
     */
    private $dcOtherTaxes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_netincome", type="string", nullable=true)
     */
    private $dcNetincome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="algorithm", type="string", nullable=true)
     */
    private $algorithm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_match_probability_percent", type="string", nullable=true)
     */
    private $dcMatchProbabilityPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_data_flag", type="string", nullable=true)
     */
    private $dcDataFlag;

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

    public function getAccountidUi9(): ?string
    {
        return $this->accountidUi9;
    }

    public function setAccountidUi9(?string $accountidUi9): self
    {
        $this->accountidUi9 = $accountidUi9;

        return $this;
    }

    public function getCustomernumber8(): ?string
    {
        return $this->customernumber8;
    }

    public function setCustomernumber8(?string $customernumber8): self
    {
        $this->customernumber8 = $customernumber8;

        return $this;
    }

    public function getAccountname8(): ?string
    {
        return $this->accountname8;
    }

    public function setAccountname8(?string $accountname8): self
    {
        $this->accountname8 = $accountname8;

        return $this;
    }

    public function getRegistrationnumber8(): ?string
    {
        return $this->registrationnumber8;
    }

    public function setRegistrationnumber8(?string $registrationnumber8): self
    {
        $this->registrationnumber8 = $registrationnumber8;

        return $this;
    }

    public function getBillingcountry8(): ?string
    {
        return $this->billingcountry8;
    }

    public function setBillingcountry8(?string $billingcountry8): self
    {
        $this->billingcountry8 = $billingcountry8;

        return $this;
    }

    public function getBillingstateprovince8(): ?string
    {
        return $this->billingstateprovince8;
    }

    public function setBillingstateprovince8(?string $billingstateprovince8): self
    {
        $this->billingstateprovince8 = $billingstateprovince8;

        return $this;
    }

    public function getBillingcity8(): ?string
    {
        return $this->billingcity8;
    }

    public function setBillingcity8(?string $billingcity8): self
    {
        $this->billingcity8 = $billingcity8;

        return $this;
    }

    public function getBillingstreet8(): ?string
    {
        return $this->billingstreet8;
    }

    public function setBillingstreet8(?string $billingstreet8): self
    {
        $this->billingstreet8 = $billingstreet8;

        return $this;
    }

    public function getBillingzippostalcode8(): ?string
    {
        return $this->billingzippostalcode8;
    }

    public function setBillingzippostalcode8(?string $billingzippostalcode8): self
    {
        $this->billingzippostalcode8 = $billingzippostalcode8;

        return $this;
    }

    public function getVatnumber8(): ?string
    {
        return $this->vatnumber8;
    }

    public function setVatnumber8(?string $vatnumber8): self
    {
        $this->vatnumber8 = $vatnumber8;

        return $this;
    }

    public function getAccountphone8(): ?string
    {
        return $this->accountphone8;
    }

    public function setAccountphone8(?string $accountphone8): self
    {
        $this->accountphone8 = $accountphone8;

        return $this;
    }

    public function getFirstname8(): ?string
    {
        return $this->firstname8;
    }

    public function setFirstname8(?string $firstname8): self
    {
        $this->firstname8 = $firstname8;

        return $this;
    }

    public function getMiddlename8(): ?string
    {
        return $this->middlename8;
    }

    public function setMiddlename8(?string $middlename8): self
    {
        $this->middlename8 = $middlename8;

        return $this;
    }

    public function getLastname8(): ?string
    {
        return $this->lastname8;
    }

    public function setLastname8(?string $lastname8): self
    {
        $this->lastname8 = $lastname8;

        return $this;
    }

    public function getPrimaryemailupdated8(): ?string
    {
        return $this->primaryemailupdated8;
    }

    public function setPrimaryemailupdated8(?string $primaryemailupdated8): self
    {
        $this->primaryemailupdated8 = $primaryemailupdated8;

        return $this;
    }

    public function getWorkphone8(): ?string
    {
        return $this->workphone8;
    }

    public function setWorkphone8(?string $workphone8): self
    {
        $this->workphone8 = $workphone8;

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

    public function getDcCompanyId(): ?string
    {
        return $this->dcCompanyId;
    }

    public function setDcCompanyId(?string $dcCompanyId): self
    {
        $this->dcCompanyId = $dcCompanyId;

        return $this;
    }

    public function getDcGgsCompanyId(): ?string
    {
        return $this->dcGgsCompanyId;
    }

    public function setDcGgsCompanyId(?string $dcGgsCompanyId): self
    {
        $this->dcGgsCompanyId = $dcGgsCompanyId;

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

    public function getDcFormerCompanyName(): ?string
    {
        return $this->dcFormerCompanyName;
    }

    public function setDcFormerCompanyName(?string $dcFormerCompanyName): self
    {
        $this->dcFormerCompanyName = $dcFormerCompanyName;

        return $this;
    }

    public function getDcAddress(): ?string
    {
        return $this->dcAddress;
    }

    public function setDcAddress(?string $dcAddress): self
    {
        $this->dcAddress = $dcAddress;

        return $this;
    }

    public function getDcZipCode(): ?string
    {
        return $this->dcZipCode;
    }

    public function setDcZipCode(?string $dcZipCode): self
    {
        $this->dcZipCode = $dcZipCode;

        return $this;
    }

    public function getDcCity(): ?string
    {
        return $this->dcCity;
    }

    public function setDcCity(?string $dcCity): self
    {
        $this->dcCity = $dcCity;

        return $this;
    }

    public function getBtsCoCountryRegion(): ?string
    {
        return $this->btsCoCountryRegion;
    }

    public function setBtsCoCountryRegion(?string $btsCoCountryRegion): self
    {
        $this->btsCoCountryRegion = $btsCoCountryRegion;

        return $this;
    }

    public function getDcStatus(): ?string
    {
        return $this->dcStatus;
    }

    public function setDcStatus(?string $dcStatus): self
    {
        $this->dcStatus = $dcStatus;

        return $this;
    }

    public function getDcLegalForm(): ?string
    {
        return $this->dcLegalForm;
    }

    public function setDcLegalForm(?string $dcLegalForm): self
    {
        $this->dcLegalForm = $dcLegalForm;

        return $this;
    }

    public function getDcTradeRegisterId(): ?string
    {
        return $this->dcTradeRegisterId;
    }

    public function setDcTradeRegisterId(?string $dcTradeRegisterId): self
    {
        $this->dcTradeRegisterId = $dcTradeRegisterId;

        return $this;
    }

    public function getDcTradeRegisterCity(): ?string
    {
        return $this->dcTradeRegisterCity;
    }

    public function setDcTradeRegisterCity(?string $dcTradeRegisterCity): self
    {
        $this->dcTradeRegisterCity = $dcTradeRegisterCity;

        return $this;
    }

    public function getDcShareCapital(): ?string
    {
        return $this->dcShareCapital;
    }

    public function setDcShareCapital(?string $dcShareCapital): self
    {
        $this->dcShareCapital = $dcShareCapital;

        return $this;
    }

    public function getDcFoundationDate(): ?string
    {
        return $this->dcFoundationDate;
    }

    public function setDcFoundationDate(?string $dcFoundationDate): self
    {
        $this->dcFoundationDate = $dcFoundationDate;

        return $this;
    }

    public function getDcPhoneNumber(): ?string
    {
        return $this->dcPhoneNumber;
    }

    public function setDcPhoneNumber(?string $dcPhoneNumber): self
    {
        $this->dcPhoneNumber = $dcPhoneNumber;

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

    public function getDcUrl(): ?string
    {
        return $this->dcUrl;
    }

    public function setDcUrl(?string $dcUrl): self
    {
        $this->dcUrl = $dcUrl;

        return $this;
    }

    public function getDcEMail(): ?string
    {
        return $this->dcEMail;
    }

    public function setDcEMail(?string $dcEMail): self
    {
        $this->dcEMail = $dcEMail;

        return $this;
    }

    public function getDcBankCode(): ?string
    {
        return $this->dcBankCode;
    }

    public function setDcBankCode(?string $dcBankCode): self
    {
        $this->dcBankCode = $dcBankCode;

        return $this;
    }

    public function getDcBankName(): ?string
    {
        return $this->dcBankName;
    }

    public function setDcBankName(?string $dcBankName): self
    {
        $this->dcBankName = $dcBankName;

        return $this;
    }

    public function getDcWz2008(): ?string
    {
        return $this->dcWz2008;
    }

    public function setDcWz2008(?string $dcWz2008): self
    {
        $this->dcWz2008 = $dcWz2008;

        return $this;
    }

    public function getDcIndustryDescription(): ?string
    {
        return $this->dcIndustryDescription;
    }

    public function setDcIndustryDescription(?string $dcIndustryDescription): self
    {
        $this->dcIndustryDescription = $dcIndustryDescription;

        return $this;
    }

    public function getBtsCoEmployeeSize(): ?string
    {
        return $this->btsCoEmployeeSize;
    }

    public function setBtsCoEmployeeSize(?string $btsCoEmployeeSize): self
    {
        $this->btsCoEmployeeSize = $btsCoEmployeeSize;

        return $this;
    }

    public function getDcEstAnnualSalesAmount(): ?string
    {
        return $this->dcEstAnnualSalesAmount;
    }

    public function setDcEstAnnualSalesAmount(?string $dcEstAnnualSalesAmount): self
    {
        $this->dcEstAnnualSalesAmount = $dcEstAnnualSalesAmount;

        return $this;
    }

    public function getDcVat(): ?string
    {
        return $this->dcVat;
    }

    public function setDcVat(?string $dcVat): self
    {
        $this->dcVat = $dcVat;

        return $this;
    }

    public function getDcScoreInternational(): ?string
    {
        return $this->dcScoreInternational;
    }

    public function setDcScoreInternational(?string $dcScoreInternational): self
    {
        $this->dcScoreInternational = $dcScoreInternational;

        return $this;
    }

    public function getDcCreditRating(): ?string
    {
        return $this->dcCreditRating;
    }

    public function setDcCreditRating(?string $dcCreditRating): self
    {
        $this->dcCreditRating = $dcCreditRating;

        return $this;
    }

    public function getDcCreditLimit(): ?string
    {
        return $this->dcCreditLimit;
    }

    public function setDcCreditLimit(?string $dcCreditLimit): self
    {
        $this->dcCreditLimit = $dcCreditLimit;

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

    public function getDcManagingDirectors(): ?string
    {
        return $this->dcManagingDirectors;
    }

    public function setDcManagingDirectors(?string $dcManagingDirectors): self
    {
        $this->dcManagingDirectors = $dcManagingDirectors;

        return $this;
    }

    public function getDcDirectorWithSigningAuthority(): ?string
    {
        return $this->dcDirectorWithSigningAuthority;
    }

    public function setDcDirectorWithSigningAuthority(?string $dcDirectorWithSigningAuthority): self
    {
        $this->dcDirectorWithSigningAuthority = $dcDirectorWithSigningAuthority;

        return $this;
    }

    public function getDcShareholders(): ?string
    {
        return $this->dcShareholders;
    }

    public function setDcShareholders(?string $dcShareholders): self
    {
        $this->dcShareholders = $dcShareholders;

        return $this;
    }

    public function getDcUltimateHolding(): ?string
    {
        return $this->dcUltimateHolding;
    }

    public function setDcUltimateHolding(?string $dcUltimateHolding): self
    {
        $this->dcUltimateHolding = $dcUltimateHolding;

        return $this;
    }

    public function getDcDirectHolding(): ?string
    {
        return $this->dcDirectHolding;
    }

    public function setDcDirectHolding(?string $dcDirectHolding): self
    {
        $this->dcDirectHolding = $dcDirectHolding;

        return $this;
    }

    public function getDcComplementaryDirs(): ?string
    {
        return $this->dcComplementaryDirs;
    }

    public function setDcComplementaryDirs(?string $dcComplementaryDirs): self
    {
        $this->dcComplementaryDirs = $dcComplementaryDirs;

        return $this;
    }

    public function getDcAccountingDate(): ?string
    {
        return $this->dcAccountingDate;
    }

    public function setDcAccountingDate(?string $dcAccountingDate): self
    {
        $this->dcAccountingDate = $dcAccountingDate;

        return $this;
    }

    public function getDcDurationInWeeks(): ?string
    {
        return $this->dcDurationInWeeks;
    }

    public function setDcDurationInWeeks(?string $dcDurationInWeeks): self
    {
        $this->dcDurationInWeeks = $dcDurationInWeeks;

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

    public function getDcConsolidatedAccount(): ?string
    {
        return $this->dcConsolidatedAccount;
    }

    public function setDcConsolidatedAccount(?string $dcConsolidatedAccount): self
    {
        $this->dcConsolidatedAccount = $dcConsolidatedAccount;

        return $this;
    }

    public function getDcAAssets(): ?string
    {
        return $this->dcAAssets;
    }

    public function setDcAAssets(?string $dcAAssets): self
    {
        $this->dcAAssets = $dcAAssets;

        return $this;
    }

    public function getDcIIntangibleAssets(): ?string
    {
        return $this->dcIIntangibleAssets;
    }

    public function setDcIIntangibleAssets(?string $dcIIntangibleAssets): self
    {
        $this->dcIIntangibleAssets = $dcIIntangibleAssets;

        return $this;
    }

    public function getDcIiFixedAssetsLongTermAssets(): ?string
    {
        return $this->dcIiFixedAssetsLongTermAssets;
    }

    public function setDcIiFixedAssetsLongTermAssets(?string $dcIiFixedAssetsLongTermAssets): self
    {
        $this->dcIiFixedAssetsLongTermAssets = $dcIiFixedAssetsLongTermAssets;

        return $this;
    }

    public function getDcIiiFinancialAssets(): ?string
    {
        return $this->dcIiiFinancialAssets;
    }

    public function setDcIiiFinancialAssets(?string $dcIiiFinancialAssets): self
    {
        $this->dcIiiFinancialAssets = $dcIiiFinancialAssets;

        return $this;
    }

    public function getDcBCurrentAssets(): ?string
    {
        return $this->dcBCurrentAssets;
    }

    public function setDcBCurrentAssets(?string $dcBCurrentAssets): self
    {
        $this->dcBCurrentAssets = $dcBCurrentAssets;

        return $this;
    }

    public function getDcIInventory(): ?string
    {
        return $this->dcIInventory;
    }

    public function setDcIInventory(?string $dcIInventory): self
    {
        $this->dcIInventory = $dcIInventory;

        return $this;
    }

    public function getDcIiReceivablsOtherAssets(): ?string
    {
        return $this->dcIiReceivablsOtherAssets;
    }

    public function setDcIiReceivablsOtherAssets(?string $dcIiReceivablsOtherAssets): self
    {
        $this->dcIiReceivablsOtherAssets = $dcIiReceivablsOtherAssets;

        return $this;
    }

    public function getDcTradeReceivables(): ?string
    {
        return $this->dcTradeReceivables;
    }

    public function setDcTradeReceivables(?string $dcTradeReceivables): self
    {
        $this->dcTradeReceivables = $dcTradeReceivables;

        return $this;
    }

    public function getDcIiiSecurities(): ?string
    {
        return $this->dcIiiSecurities;
    }

    public function setDcIiiSecurities(?string $dcIiiSecurities): self
    {
        $this->dcIiiSecurities = $dcIiiSecurities;

        return $this;
    }

    public function getDcIvLiquidAssets(): ?string
    {
        return $this->dcIvLiquidAssets;
    }

    public function setDcIvLiquidAssets(?string $dcIvLiquidAssets): self
    {
        $this->dcIvLiquidAssets = $dcIvLiquidAssets;

        return $this;
    }

    public function getDcCPrepaidExpenses(): ?string
    {
        return $this->dcCPrepaidExpenses;
    }

    public function setDcCPrepaidExpenses(?string $dcCPrepaidExpenses): self
    {
        $this->dcCPrepaidExpenses = $dcCPrepaidExpenses;

        return $this;
    }

    public function getDcDDeferedTax(): ?string
    {
        return $this->dcDDeferedTax;
    }

    public function setDcDDeferedTax(?string $dcDDeferedTax): self
    {
        $this->dcDDeferedTax = $dcDDeferedTax;

        return $this;
    }

    public function getDcEActiveDiff(): ?string
    {
        return $this->dcEActiveDiff;
    }

    public function setDcEActiveDiff(?string $dcEActiveDiff): self
    {
        $this->dcEActiveDiff = $dcEActiveDiff;

        return $this;
    }

    public function getDeficitNotCoveredByCapital2(): ?string
    {
        return $this->deficitNotCoveredByCapital2;
    }

    public function setDeficitNotCoveredByCapital2(?string $deficitNotCoveredByCapital2): self
    {
        $this->deficitNotCoveredByCapital2 = $deficitNotCoveredByCapital2;

        return $this;
    }

    public function getDeficitNotCoveredByCapital1(): ?string
    {
        return $this->deficitNotCoveredByCapital1;
    }

    public function setDeficitNotCoveredByCapital1(?string $deficitNotCoveredByCapital1): self
    {
        $this->deficitNotCoveredByCapital1 = $deficitNotCoveredByCapital1;

        return $this;
    }

    public function getDcBalanceSheetTotalActiva(): ?string
    {
        return $this->dcBalanceSheetTotalActiva;
    }

    public function setDcBalanceSheetTotalActiva(?string $dcBalanceSheetTotalActiva): self
    {
        $this->dcBalanceSheetTotalActiva = $dcBalanceSheetTotalActiva;

        return $this;
    }

    public function getDcAEquity(): ?string
    {
        return $this->dcAEquity;
    }

    public function setDcAEquity(?string $dcAEquity): self
    {
        $this->dcAEquity = $dcAEquity;

        return $this;
    }

    public function getDcISubscribedCapital(): ?string
    {
        return $this->dcISubscribedCapital;
    }

    public function setDcISubscribedCapital(?string $dcISubscribedCapital): self
    {
        $this->dcISubscribedCapital = $dcISubscribedCapital;

        return $this;
    }

    public function getDcPrivateAccount(): ?string
    {
        return $this->dcPrivateAccount;
    }

    public function setDcPrivateAccount(?string $dcPrivateAccount): self
    {
        $this->dcPrivateAccount = $dcPrivateAccount;

        return $this;
    }

    public function getDcSharesCapitalUnlimitedPart(): ?string
    {
        return $this->dcSharesCapitalUnlimitedPart;
    }

    public function setDcSharesCapitalUnlimitedPart(?string $dcSharesCapitalUnlimitedPart): self
    {
        $this->dcSharesCapitalUnlimitedPart = $dcSharesCapitalUnlimitedPart;

        return $this;
    }

    public function getDcSharesCapitalLimitedPart(): ?string
    {
        return $this->dcSharesCapitalLimitedPart;
    }

    public function setDcSharesCapitalLimitedPart(?string $dcSharesCapitalLimitedPart): self
    {
        $this->dcSharesCapitalLimitedPart = $dcSharesCapitalLimitedPart;

        return $this;
    }

    public function getDcFixedEquity(): ?string
    {
        return $this->dcFixedEquity;
    }

    public function setDcFixedEquity(?string $dcFixedEquity): self
    {
        $this->dcFixedEquity = $dcFixedEquity;

        return $this;
    }

    public function getDcVariableEquity(): ?string
    {
        return $this->dcVariableEquity;
    }

    public function setDcVariableEquity(?string $dcVariableEquity): self
    {
        $this->dcVariableEquity = $dcVariableEquity;

        return $this;
    }

    public function getDcIiCapitalReserve(): ?string
    {
        return $this->dcIiCapitalReserve;
    }

    public function setDcIiCapitalReserve(?string $dcIiCapitalReserve): self
    {
        $this->dcIiCapitalReserve = $dcIiCapitalReserve;

        return $this;
    }

    public function getDcIiiRevenueReserve(): ?string
    {
        return $this->dcIiiRevenueReserve;
    }

    public function setDcIiiRevenueReserve(?string $dcIiiRevenueReserve): self
    {
        $this->dcIiiRevenueReserve = $dcIiiRevenueReserve;

        return $this;
    }

    public function getDcIvRetainedEarnings(): ?string
    {
        return $this->dcIvRetainedEarnings;
    }

    public function setDcIvRetainedEarnings(?string $dcIvRetainedEarnings): self
    {
        $this->dcIvRetainedEarnings = $dcIvRetainedEarnings;

        return $this;
    }

    public function getDcVNetIncome(): ?string
    {
        return $this->dcVNetIncome;
    }

    public function setDcVNetIncome(?string $dcVNetIncome): self
    {
        $this->dcVNetIncome = $dcVNetIncome;

        return $this;
    }

    public function getDcProfitLoss(): ?string
    {
        return $this->dcProfitLoss;
    }

    public function setDcProfitLoss(?string $dcProfitLoss): self
    {
        $this->dcProfitLoss = $dcProfitLoss;

        return $this;
    }

    public function getDcBAccruals(): ?string
    {
        return $this->dcBAccruals;
    }

    public function setDcBAccruals(?string $dcBAccruals): self
    {
        $this->dcBAccruals = $dcBAccruals;

        return $this;
    }

    public function getDcAccrualsForPension(): ?string
    {
        return $this->dcAccrualsForPension;
    }

    public function setDcAccrualsForPension(?string $dcAccrualsForPension): self
    {
        $this->dcAccrualsForPension = $dcAccrualsForPension;

        return $this;
    }

    public function getDcAccrualsForTax(): ?string
    {
        return $this->dcAccrualsForTax;
    }

    public function setDcAccrualsForTax(?string $dcAccrualsForTax): self
    {
        $this->dcAccrualsForTax = $dcAccrualsForTax;

        return $this;
    }

    public function getDcCLiabilities(): ?string
    {
        return $this->dcCLiabilities;
    }

    public function setDcCLiabilities(?string $dcCLiabilities): self
    {
        $this->dcCLiabilities = $dcCLiabilities;

        return $this;
    }

    public function getDcTradePayables(): ?string
    {
        return $this->dcTradePayables;
    }

    public function setDcTradePayables(?string $dcTradePayables): self
    {
        $this->dcTradePayables = $dcTradePayables;

        return $this;
    }

    public function getDcDDeferredIncome(): ?string
    {
        return $this->dcDDeferredIncome;
    }

    public function setDcDDeferredIncome(?string $dcDDeferredIncome): self
    {
        $this->dcDDeferredIncome = $dcDDeferredIncome;

        return $this;
    }

    public function getDcEDeferredTaxLiabilities(): ?string
    {
        return $this->dcEDeferredTaxLiabilities;
    }

    public function setDcEDeferredTaxLiabilities(?string $dcEDeferredTaxLiabilities): self
    {
        $this->dcEDeferredTaxLiabilities = $dcEDeferredTaxLiabilities;

        return $this;
    }

    public function getDcBalanceSheetTotalPassiva(): ?string
    {
        return $this->dcBalanceSheetTotalPassiva;
    }

    public function setDcBalanceSheetTotalPassiva(?string $dcBalanceSheetTotalPassiva): self
    {
        $this->dcBalanceSheetTotalPassiva = $dcBalanceSheetTotalPassiva;

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

    public function getDcInventoryChange(): ?string
    {
        return $this->dcInventoryChange;
    }

    public function setDcInventoryChange(?string $dcInventoryChange): self
    {
        $this->dcInventoryChange = $dcInventoryChange;

        return $this;
    }

    public function getDcOwnWork(): ?string
    {
        return $this->dcOwnWork;
    }

    public function setDcOwnWork(?string $dcOwnWork): self
    {
        $this->dcOwnWork = $dcOwnWork;

        return $this;
    }

    public function getDcOthOpRevenue(): ?string
    {
        return $this->dcOthOpRevenue;
    }

    public function setDcOthOpRevenue(?string $dcOthOpRevenue): self
    {
        $this->dcOthOpRevenue = $dcOthOpRevenue;

        return $this;
    }

    public function getDcMaterial(): ?string
    {
        return $this->dcMaterial;
    }

    public function setDcMaterial(?string $dcMaterial): self
    {
        $this->dcMaterial = $dcMaterial;

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

    public function getDcStaff(): ?string
    {
        return $this->dcStaff;
    }

    public function setDcStaff(?string $dcStaff): self
    {
        $this->dcStaff = $dcStaff;

        return $this;
    }

    public function getDcAmortisation(): ?string
    {
        return $this->dcAmortisation;
    }

    public function setDcAmortisation(?string $dcAmortisation): self
    {
        $this->dcAmortisation = $dcAmortisation;

        return $this;
    }

    public function getDcOtherCosts(): ?string
    {
        return $this->dcOtherCosts;
    }

    public function setDcOtherCosts(?string $dcOtherCosts): self
    {
        $this->dcOtherCosts = $dcOtherCosts;

        return $this;
    }

    public function getDcOperationalResult(): ?string
    {
        return $this->dcOperationalResult;
    }

    public function setDcOperationalResult(?string $dcOperationalResult): self
    {
        $this->dcOperationalResult = $dcOperationalResult;

        return $this;
    }

    public function getDcOthIntSimilarIncome(): ?string
    {
        return $this->dcOthIntSimilarIncome;
    }

    public function setDcOthIntSimilarIncome(?string $dcOthIntSimilarIncome): self
    {
        $this->dcOthIntSimilarIncome = $dcOthIntSimilarIncome;

        return $this;
    }

    public function getDcIntSimilarExpenses(): ?string
    {
        return $this->dcIntSimilarExpenses;
    }

    public function setDcIntSimilarExpenses(?string $dcIntSimilarExpenses): self
    {
        $this->dcIntSimilarExpenses = $dcIntSimilarExpenses;

        return $this;
    }

    public function getDcFinancialResult(): ?string
    {
        return $this->dcFinancialResult;
    }

    public function setDcFinancialResult(?string $dcFinancialResult): self
    {
        $this->dcFinancialResult = $dcFinancialResult;

        return $this;
    }

    public function getDcOrdOpResult(): ?string
    {
        return $this->dcOrdOpResult;
    }

    public function setDcOrdOpResult(?string $dcOrdOpResult): self
    {
        $this->dcOrdOpResult = $dcOrdOpResult;

        return $this;
    }

    public function getDcExtraordinaryResult(): ?string
    {
        return $this->dcExtraordinaryResult;
    }

    public function setDcExtraordinaryResult(?string $dcExtraordinaryResult): self
    {
        $this->dcExtraordinaryResult = $dcExtraordinaryResult;

        return $this;
    }

    public function getDcTax(): ?string
    {
        return $this->dcTax;
    }

    public function setDcTax(?string $dcTax): self
    {
        $this->dcTax = $dcTax;

        return $this;
    }

    public function getDcOtherTaxes(): ?string
    {
        return $this->dcOtherTaxes;
    }

    public function setDcOtherTaxes(?string $dcOtherTaxes): self
    {
        $this->dcOtherTaxes = $dcOtherTaxes;

        return $this;
    }

    public function getDcNetincome(): ?string
    {
        return $this->dcNetincome;
    }

    public function setDcNetincome(?string $dcNetincome): self
    {
        $this->dcNetincome = $dcNetincome;

        return $this;
    }

    public function getAlgorithm(): ?string
    {
        return $this->algorithm;
    }

    public function setAlgorithm(?string $algorithm): self
    {
        $this->algorithm = $algorithm;

        return $this;
    }

    public function getDcMatchProbabilityPercent(): ?string
    {
        return $this->dcMatchProbabilityPercent;
    }

    public function setDcMatchProbabilityPercent(?string $dcMatchProbabilityPercent): self
    {
        $this->dcMatchProbabilityPercent = $dcMatchProbabilityPercent;

        return $this;
    }

    public function getDcDataFlag(): ?string
    {
        return $this->dcDataFlag;
    }

    public function setDcDataFlag(?string $dcDataFlag): self
    {
        $this->dcDataFlag = $dcDataFlag;

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
