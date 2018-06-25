<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="ukdata", schema="creditsafe")
 * @ORM\Entity(repositoryClass="App\Repository\ukdataRepository")
 */
class ukdata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.ukdata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui8", type="string", nullable=true)
     */
    private $accountidUi8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber7", type="string", nullable=true)
     */
    private $customernumber7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname7", type="string", nullable=true)
     */
    private $accountname7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber7", type="string", nullable=true)
     */
    private $registrationnumber7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry7", type="string", nullable=true)
     */
    private $billingcountry7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince7", type="string", nullable=true)
     */
    private $billingstateprovince7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity7", type="string", nullable=true)
     */
    private $billingcity7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet7", type="string", nullable=true)
     */
    private $billingstreet7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode7", type="string", nullable=true)
     */
    private $billingzippostalcode7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber7", type="string", nullable=true)
     */
    private $vatnumber7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone7", type="string", nullable=true)
     */
    private $accountphone7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname7", type="string", nullable=true)
     */
    private $firstname7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename7", type="string", nullable=true)
     */
    private $middlename7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname7", type="string", nullable=true)
     */
    private $lastname7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated7", type="string", nullable=true)
     */
    private $primaryemailupdated7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone7", type="string", nullable=true)
     */
    private $workphone7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="algorythm", type="string", nullable=true)
     */
    private $algorythm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trad_num", type="string", nullable=true)
     */
    private $tradNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_reg_num", type="string", nullable=true)
     */
    private $dcRegNum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_safe_number", type="string", nullable=true)
     */
    private $dcSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_id", type="string", nullable=true)
     */
    private $dcGgsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_co_name", type="string", nullable=true)
     */
    private $dcCoName;

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
     * @ORM\Column(name="registered_number", type="string", nullable=true)
     */
    private $registeredNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trad_name", type="string", nullable=true)
     */
    private $tradName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trad_address1", type="string", nullable=true)
     */
    private $tradAddress1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trad_address2", type="string", nullable=true)
     */
    private $tradAddress2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trad_address3", type="string", nullable=true)
     */
    private $tradAddress3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trad_address4", type="string", nullable=true)
     */
    private $tradAddress4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trad_postcode", type="string", nullable=true)
     */
    private $tradPostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_dept", type="string", nullable=true)
     */
    private $dcPafDept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_pobox", type="string", nullable=true)
     */
    private $dcPafPobox;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_add1", type="string", nullable=true)
     */
    private $dcPafAdd1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_add2", type="string", nullable=true)
     */
    private $dcPafAdd2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_add3", type="string", nullable=true)
     */
    private $dcPafAdd3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_add4", type="string", nullable=true)
     */
    private $dcPafAdd4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_add5", type="string", nullable=true)
     */
    private $dcPafAdd5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_add6", type="string", nullable=true)
     */
    private $dcPafAdd6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_add7", type="string", nullable=true)
     */
    private $dcPafAdd7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_town", type="string", nullable=true)
     */
    private $dcPafTown;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paf_pc", type="string", nullable=true)
     */
    private $dcPafPc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_years_trading", type="string", nullable=true)
     */
    private $dcYearsTrading;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_num_employees", type="string", nullable=true)
     */
    private $dcNumEmployees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ltd_nonltd_flag", type="string", nullable=true)
     */
    private $dcLtdNonltdFlag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sic2003", type="string", nullable=true)
     */
    private $dcSic2003;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sic2003_desc", type="string", nullable=true)
     */
    private $dcSic2003Desc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sic2007", type="string", nullable=true)
     */
    private $dcSic2007;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sic2007_desc", type="string", nullable=true)
     */
    private $dcSic2007Desc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_incorp_date", type="string", nullable=true)
     */
    private $dcIncorpDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_tps_flag", type="string", nullable=true)
     */
    private $dcTpsFlag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_phone", type="string", nullable=true)
     */
    private $dcPhone;

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
     * @ORM\Column(name="dc_is_active", type="string", nullable=true)
     */
    private $dcIsActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_form", type="string", nullable=true)
     */
    private $dcCompanyForm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_title", type="string", nullable=true)
     */
    private $dcContactTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_firstname", type="string", nullable=true)
     */
    private $dcContactFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_surname", type="string", nullable=true)
     */
    private $dcContactSurname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_dob", type="string", nullable=true)
     */
    private $dcContactDob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contact_occupation", type="string", nullable=true)
     */
    private $dcContactOccupation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nationality", type="string", nullable=true)
     */
    private $dcNationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_multiple_directors", type="string", nullable=true)
     */
    private $dcMultipleDirectors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ult_parent_bin", type="string", nullable=true)
     */
    private $dcUltParentBin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ult_parent_name", type="string", nullable=true)
     */
    private $dcUltParentName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_bin", type="string", nullable=true)
     */
    private $dcParentBin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_name", type="string", nullable=true)
     */
    private $dcParentName;

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
     * @ORM\Column(name="dc_prev_credit_rating", type="string", nullable=true)
     */
    private $dcPrevCreditRating;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rating_date", type="string", nullable=true)
     */
    private $dcRatingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_limit_date", type="string", nullable=true)
     */
    private $dcLimitDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_international_score", type="string", nullable=true)
     */
    private $dcInternationalScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_equity_in_percent", type="string", nullable=true)
     */
    private $dcEquityInPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_creditor_days", type="string", nullable=true)
     */
    private $dcCreditorDays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_liquid_acid_test", type="string", nullable=true)
     */
    private $dcLiquidAcidTest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ret_cap_emp_percent", type="string", nullable=true)
     */
    private $dcRetCapEmpPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ret_total_assets_emp_percent", type="string", nullable=true)
     */
    private $dcRetTotalAssetsEmpPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_current_debt_ratio_percent", type="string", nullable=true)
     */
    private $dcCurrentDebtRatioPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_debt_ratio_percent", type="string", nullable=true)
     */
    private $dcTotalDebtRatioPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_stock_turnover_ratio_percent", type="string", nullable=true)
     */
    private $dcStockTurnoverRatioPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ret_net_assets_emp_percent", type="string", nullable=true)
     */
    private $dcRetNetAssetsEmpPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_current_ratio", type="string", nullable=true)
     */
    private $dcCurrentRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sales_net_working_capital", type="string", nullable=true)
     */
    private $dcSalesNetWorkingCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_gearing_ratio_percent", type="string", nullable=true)
     */
    private $dcGearingRatioPercent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ccj_counts", type="string", nullable=true)
     */
    private $dcCcjCounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ccj_value", type="string", nullable=true)
     */
    private $dcCcjValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shareholders", type="string", nullable=true)
     */
    private $dcShareholders;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_principle_activity", type="string", nullable=true)
     */
    private $dcPrincipleActivity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_cashflow_ops", type="string", nullable=true)
     */
    private $dcNetCashflowOps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_cashflow_before_fin", type="string", nullable=true)
     */
    private $dcNetCashflowBeforeFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_cashflow_from_fin", type="string", nullable=true)
     */
    private $dcNetCashflowFromFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_contingent_liability", type="string", nullable=true)
     */
    private $dcContingentLiability;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_capital_employed", type="string", nullable=true)
     */
    private $dcCapitalEmployed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_auditors", type="string", nullable=true)
     */
    private $dcAuditors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_auditors_qual", type="string", nullable=true)
     */
    private $dcAuditorsQual;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bankers", type="string", nullable=true)
     */
    private $dcBankers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mtg_outstanding", type="string", nullable=true)
     */
    private $dcMtgOutstanding;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mtg_outstanding_timestamp", type="string", nullable=true)
     */
    private $dcMtgOutstandingTimestamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mtg_satisfied", type="string", nullable=true)
     */
    private $dcMtgSatisfied;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mtg_satisfied_timestamp", type="string", nullable=true)
     */
    private $dcMtgSatisfiedTimestamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mtg_partial", type="string", nullable=true)
     */
    private $dcMtgPartial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mtg_partial_timestamp", type="string", nullable=true)
     */
    private $dcMtgPartialTimestamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_tangible_assets", type="string", nullable=true)
     */
    private $dcTangibleAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_intangible_assets", type="string", nullable=true)
     */
    private $dcIntangibleAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_fixed_assets", type="string", nullable=true)
     */
    private $dcTotalFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_current_assets", type="string", nullable=true)
     */
    private $dcTotalCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_debtors", type="string", nullable=true)
     */
    private $dcTradeDebtors;

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
     * @ORM\Column(name="dc_other_current_assets", type="string", nullable=true)
     */
    private $dcOtherCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_misc_current_assets", type="string", nullable=true)
     */
    private $dcMiscCurrentAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_assets", type="string", nullable=true)
     */
    private $dcTotalAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_current_liabilities", type="string", nullable=true)
     */
    private $dcTotalCurrentLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_creditors", type="string", nullable=true)
     */
    private $dcTradeCreditors;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bank_overdraft", type="string", nullable=true)
     */
    private $dcBankOverdraft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_oth_short_term_fin", type="string", nullable=true)
     */
    private $dcOthShortTermFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_misv_current_liabilites", type="string", nullable=true)
     */
    private $dcMisvCurrentLiabilites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_oth_long_term_finance", type="string", nullable=true)
     */
    private $dcOthLongTermFinance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_long_term_liabilities", type="string", nullable=true)
     */
    private $dcTotalLongTermLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_overdraft_ltl", type="string", nullable=true)
     */
    private $dcTotalOverdraftLtl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_liabilities", type="string", nullable=true)
     */
    private $dcTotalLiabilities;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_assets", type="string", nullable=true)
     */
    private $dcNetAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_working_capital", type="string", nullable=true)
     */
    private $dcWorkingCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_paid_up_capital", type="string", nullable=true)
     */
    private $dcPaidUpCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_profit_loss_act_reserve", type="string", nullable=true)
     */
    private $dcProfitLossActReserve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sundry_reserves", type="string", nullable=true)
     */
    private $dcSundryReserves;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_reeval_reserves", type="string", nullable=true)
     */
    private $dcReevalReserves;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shareholders_funds", type="string", nullable=true)
     */
    private $dcShareholdersFunds;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_worth", type="string", nullable=true)
     */
    private $dcNetWorth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accounts_to_from", type="string", nullable=true)
     */
    private $dcAccountsToFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_months", type="string", nullable=true)
     */
    private $dcMonths;

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
     * @ORM\Column(name="dc_wages_salaries", type="string", nullable=true)
     */
    private $dcWagesSalaries;

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
     * @ORM\Column(name="dc_interest_payments", type="string", nullable=true)
     */
    private $dcInterestPayments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_pretax_profit", type="string", nullable=true)
     */
    private $dcPretaxProfit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_tax", type="string", nullable=true)
     */
    private $dcTax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_dividends_payable", type="string", nullable=true)
     */
    private $dcDividendsPayable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_retained_profits", type="string", nullable=true)
     */
    private $dcRetainedProfits;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_pretax_margin", type="string", nullable=true)
     */
    private $dcPretaxMargin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_posttax_profit", type="string", nullable=true)
     */
    private $dcPosttaxProfit;

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
     * @ORM\Column(name="dateadded", type="datetime", nullable=false)
     */
    private $dateadded;

    /**
     * @var string
     *
     * @ORM\Column(name="asoffdate", type="datetime", nullable=false)
     */
    private $asoffdate;

    public function getAccountid(): ?string
    {
        return $this->accountid;
    }

    public function setAccountid(string $accountid): self
    {
        $this->accountid = $accountid;

        return $this;
    }

    public function getAccountidUi8(): ?string
    {
        return $this->accountidUi8;
    }

    public function setAccountidUi8(?string $accountidUi8): self
    {
        $this->accountidUi8 = $accountidUi8;

        return $this;
    }

    public function getCustomernumber7(): ?string
    {
        return $this->customernumber7;
    }

    public function setCustomernumber7(?string $customernumber7): self
    {
        $this->customernumber7 = $customernumber7;

        return $this;
    }

    public function getAccountname7(): ?string
    {
        return $this->accountname7;
    }

    public function setAccountname7(?string $accountname7): self
    {
        $this->accountname7 = $accountname7;

        return $this;
    }

    public function getRegistrationnumber7(): ?string
    {
        return $this->registrationnumber7;
    }

    public function setRegistrationnumber7(?string $registrationnumber7): self
    {
        $this->registrationnumber7 = $registrationnumber7;

        return $this;
    }

    public function getBillingcountry7(): ?string
    {
        return $this->billingcountry7;
    }

    public function setBillingcountry7(?string $billingcountry7): self
    {
        $this->billingcountry7 = $billingcountry7;

        return $this;
    }

    public function getBillingstateprovince7(): ?string
    {
        return $this->billingstateprovince7;
    }

    public function setBillingstateprovince7(?string $billingstateprovince7): self
    {
        $this->billingstateprovince7 = $billingstateprovince7;

        return $this;
    }

    public function getBillingcity7(): ?string
    {
        return $this->billingcity7;
    }

    public function setBillingcity7(?string $billingcity7): self
    {
        $this->billingcity7 = $billingcity7;

        return $this;
    }

    public function getBillingstreet7(): ?string
    {
        return $this->billingstreet7;
    }

    public function setBillingstreet7(?string $billingstreet7): self
    {
        $this->billingstreet7 = $billingstreet7;

        return $this;
    }

    public function getBillingzippostalcode7(): ?string
    {
        return $this->billingzippostalcode7;
    }

    public function setBillingzippostalcode7(?string $billingzippostalcode7): self
    {
        $this->billingzippostalcode7 = $billingzippostalcode7;

        return $this;
    }

    public function getVatnumber7(): ?string
    {
        return $this->vatnumber7;
    }

    public function setVatnumber7(?string $vatnumber7): self
    {
        $this->vatnumber7 = $vatnumber7;

        return $this;
    }

    public function getAccountphone7(): ?string
    {
        return $this->accountphone7;
    }

    public function setAccountphone7(?string $accountphone7): self
    {
        $this->accountphone7 = $accountphone7;

        return $this;
    }

    public function getFirstname7(): ?string
    {
        return $this->firstname7;
    }

    public function setFirstname7(?string $firstname7): self
    {
        $this->firstname7 = $firstname7;

        return $this;
    }

    public function getMiddlename7(): ?string
    {
        return $this->middlename7;
    }

    public function setMiddlename7(?string $middlename7): self
    {
        $this->middlename7 = $middlename7;

        return $this;
    }

    public function getLastname7(): ?string
    {
        return $this->lastname7;
    }

    public function setLastname7(?string $lastname7): self
    {
        $this->lastname7 = $lastname7;

        return $this;
    }

    public function getPrimaryemailupdated7(): ?string
    {
        return $this->primaryemailupdated7;
    }

    public function setPrimaryemailupdated7(?string $primaryemailupdated7): self
    {
        $this->primaryemailupdated7 = $primaryemailupdated7;

        return $this;
    }

    public function getWorkphone7(): ?string
    {
        return $this->workphone7;
    }

    public function setWorkphone7(?string $workphone7): self
    {
        $this->workphone7 = $workphone7;

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

    public function getTradNum(): ?string
    {
        return $this->tradNum;
    }

    public function setTradNum(?string $tradNum): self
    {
        $this->tradNum = $tradNum;

        return $this;
    }

    public function getDcRegNum(): ?string
    {
        return $this->dcRegNum;
    }

    public function setDcRegNum(?string $dcRegNum): self
    {
        $this->dcRegNum = $dcRegNum;

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

    public function getDcGgsId(): ?string
    {
        return $this->dcGgsId;
    }

    public function setDcGgsId(?string $dcGgsId): self
    {
        $this->dcGgsId = $dcGgsId;

        return $this;
    }

    public function getDcCoName(): ?string
    {
        return $this->dcCoName;
    }

    public function setDcCoName(?string $dcCoName): self
    {
        $this->dcCoName = $dcCoName;

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

    public function getRegisteredNumber(): ?string
    {
        return $this->registeredNumber;
    }

    public function setRegisteredNumber(?string $registeredNumber): self
    {
        $this->registeredNumber = $registeredNumber;

        return $this;
    }

    public function getTradName(): ?string
    {
        return $this->tradName;
    }

    public function setTradName(?string $tradName): self
    {
        $this->tradName = $tradName;

        return $this;
    }

    public function getTradAddress1(): ?string
    {
        return $this->tradAddress1;
    }

    public function setTradAddress1(?string $tradAddress1): self
    {
        $this->tradAddress1 = $tradAddress1;

        return $this;
    }

    public function getTradAddress2(): ?string
    {
        return $this->tradAddress2;
    }

    public function setTradAddress2(?string $tradAddress2): self
    {
        $this->tradAddress2 = $tradAddress2;

        return $this;
    }

    public function getTradAddress3(): ?string
    {
        return $this->tradAddress3;
    }

    public function setTradAddress3(?string $tradAddress3): self
    {
        $this->tradAddress3 = $tradAddress3;

        return $this;
    }

    public function getTradAddress4(): ?string
    {
        return $this->tradAddress4;
    }

    public function setTradAddress4(?string $tradAddress4): self
    {
        $this->tradAddress4 = $tradAddress4;

        return $this;
    }

    public function getTradPostcode(): ?string
    {
        return $this->tradPostcode;
    }

    public function setTradPostcode(?string $tradPostcode): self
    {
        $this->tradPostcode = $tradPostcode;

        return $this;
    }

    public function getDcPafDept(): ?string
    {
        return $this->dcPafDept;
    }

    public function setDcPafDept(?string $dcPafDept): self
    {
        $this->dcPafDept = $dcPafDept;

        return $this;
    }

    public function getDcPafPobox(): ?string
    {
        return $this->dcPafPobox;
    }

    public function setDcPafPobox(?string $dcPafPobox): self
    {
        $this->dcPafPobox = $dcPafPobox;

        return $this;
    }

    public function getDcPafAdd1(): ?string
    {
        return $this->dcPafAdd1;
    }

    public function setDcPafAdd1(?string $dcPafAdd1): self
    {
        $this->dcPafAdd1 = $dcPafAdd1;

        return $this;
    }

    public function getDcPafAdd2(): ?string
    {
        return $this->dcPafAdd2;
    }

    public function setDcPafAdd2(?string $dcPafAdd2): self
    {
        $this->dcPafAdd2 = $dcPafAdd2;

        return $this;
    }

    public function getDcPafAdd3(): ?string
    {
        return $this->dcPafAdd3;
    }

    public function setDcPafAdd3(?string $dcPafAdd3): self
    {
        $this->dcPafAdd3 = $dcPafAdd3;

        return $this;
    }

    public function getDcPafAdd4(): ?string
    {
        return $this->dcPafAdd4;
    }

    public function setDcPafAdd4(?string $dcPafAdd4): self
    {
        $this->dcPafAdd4 = $dcPafAdd4;

        return $this;
    }

    public function getDcPafAdd5(): ?string
    {
        return $this->dcPafAdd5;
    }

    public function setDcPafAdd5(?string $dcPafAdd5): self
    {
        $this->dcPafAdd5 = $dcPafAdd5;

        return $this;
    }

    public function getDcPafAdd6(): ?string
    {
        return $this->dcPafAdd6;
    }

    public function setDcPafAdd6(?string $dcPafAdd6): self
    {
        $this->dcPafAdd6 = $dcPafAdd6;

        return $this;
    }

    public function getDcPafAdd7(): ?string
    {
        return $this->dcPafAdd7;
    }

    public function setDcPafAdd7(?string $dcPafAdd7): self
    {
        $this->dcPafAdd7 = $dcPafAdd7;

        return $this;
    }

    public function getDcPafTown(): ?string
    {
        return $this->dcPafTown;
    }

    public function setDcPafTown(?string $dcPafTown): self
    {
        $this->dcPafTown = $dcPafTown;

        return $this;
    }

    public function getDcPafPc(): ?string
    {
        return $this->dcPafPc;
    }

    public function setDcPafPc(?string $dcPafPc): self
    {
        $this->dcPafPc = $dcPafPc;

        return $this;
    }

    public function getDcYearsTrading(): ?string
    {
        return $this->dcYearsTrading;
    }

    public function setDcYearsTrading(?string $dcYearsTrading): self
    {
        $this->dcYearsTrading = $dcYearsTrading;

        return $this;
    }

    public function getDcNumEmployees(): ?string
    {
        return $this->dcNumEmployees;
    }

    public function setDcNumEmployees(?string $dcNumEmployees): self
    {
        $this->dcNumEmployees = $dcNumEmployees;

        return $this;
    }

    public function getDcLtdNonltdFlag(): ?string
    {
        return $this->dcLtdNonltdFlag;
    }

    public function setDcLtdNonltdFlag(?string $dcLtdNonltdFlag): self
    {
        $this->dcLtdNonltdFlag = $dcLtdNonltdFlag;

        return $this;
    }

    public function getDcSic2003(): ?string
    {
        return $this->dcSic2003;
    }

    public function setDcSic2003(?string $dcSic2003): self
    {
        $this->dcSic2003 = $dcSic2003;

        return $this;
    }

    public function getDcSic2003Desc(): ?string
    {
        return $this->dcSic2003Desc;
    }

    public function setDcSic2003Desc(?string $dcSic2003Desc): self
    {
        $this->dcSic2003Desc = $dcSic2003Desc;

        return $this;
    }

    public function getDcSic2007(): ?string
    {
        return $this->dcSic2007;
    }

    public function setDcSic2007(?string $dcSic2007): self
    {
        $this->dcSic2007 = $dcSic2007;

        return $this;
    }

    public function getDcSic2007Desc(): ?string
    {
        return $this->dcSic2007Desc;
    }

    public function setDcSic2007Desc(?string $dcSic2007Desc): self
    {
        $this->dcSic2007Desc = $dcSic2007Desc;

        return $this;
    }

    public function getDcIncorpDate(): ?string
    {
        return $this->dcIncorpDate;
    }

    public function setDcIncorpDate(?string $dcIncorpDate): self
    {
        $this->dcIncorpDate = $dcIncorpDate;

        return $this;
    }

    public function getDcTpsFlag(): ?string
    {
        return $this->dcTpsFlag;
    }

    public function setDcTpsFlag(?string $dcTpsFlag): self
    {
        $this->dcTpsFlag = $dcTpsFlag;

        return $this;
    }

    public function getDcPhone(): ?string
    {
        return $this->dcPhone;
    }

    public function setDcPhone(?string $dcPhone): self
    {
        $this->dcPhone = $dcPhone;

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

    public function getDcIsActive(): ?string
    {
        return $this->dcIsActive;
    }

    public function setDcIsActive(?string $dcIsActive): self
    {
        $this->dcIsActive = $dcIsActive;

        return $this;
    }

    public function getDcCompanyForm(): ?string
    {
        return $this->dcCompanyForm;
    }

    public function setDcCompanyForm(?string $dcCompanyForm): self
    {
        $this->dcCompanyForm = $dcCompanyForm;

        return $this;
    }

    public function getDcContactTitle(): ?string
    {
        return $this->dcContactTitle;
    }

    public function setDcContactTitle(?string $dcContactTitle): self
    {
        $this->dcContactTitle = $dcContactTitle;

        return $this;
    }

    public function getDcContactFirstname(): ?string
    {
        return $this->dcContactFirstname;
    }

    public function setDcContactFirstname(?string $dcContactFirstname): self
    {
        $this->dcContactFirstname = $dcContactFirstname;

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

    public function getDcContactDob(): ?string
    {
        return $this->dcContactDob;
    }

    public function setDcContactDob(?string $dcContactDob): self
    {
        $this->dcContactDob = $dcContactDob;

        return $this;
    }

    public function getDcContactOccupation(): ?string
    {
        return $this->dcContactOccupation;
    }

    public function setDcContactOccupation(?string $dcContactOccupation): self
    {
        $this->dcContactOccupation = $dcContactOccupation;

        return $this;
    }

    public function getDcNationality(): ?string
    {
        return $this->dcNationality;
    }

    public function setDcNationality(?string $dcNationality): self
    {
        $this->dcNationality = $dcNationality;

        return $this;
    }

    public function getDcMultipleDirectors(): ?string
    {
        return $this->dcMultipleDirectors;
    }

    public function setDcMultipleDirectors(?string $dcMultipleDirectors): self
    {
        $this->dcMultipleDirectors = $dcMultipleDirectors;

        return $this;
    }

    public function getDcUltParentBin(): ?string
    {
        return $this->dcUltParentBin;
    }

    public function setDcUltParentBin(?string $dcUltParentBin): self
    {
        $this->dcUltParentBin = $dcUltParentBin;

        return $this;
    }

    public function getDcUltParentName(): ?string
    {
        return $this->dcUltParentName;
    }

    public function setDcUltParentName(?string $dcUltParentName): self
    {
        $this->dcUltParentName = $dcUltParentName;

        return $this;
    }

    public function getDcParentBin(): ?string
    {
        return $this->dcParentBin;
    }

    public function setDcParentBin(?string $dcParentBin): self
    {
        $this->dcParentBin = $dcParentBin;

        return $this;
    }

    public function getDcParentName(): ?string
    {
        return $this->dcParentName;
    }

    public function setDcParentName(?string $dcParentName): self
    {
        $this->dcParentName = $dcParentName;

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

    public function getDcPrevCreditRating(): ?string
    {
        return $this->dcPrevCreditRating;
    }

    public function setDcPrevCreditRating(?string $dcPrevCreditRating): self
    {
        $this->dcPrevCreditRating = $dcPrevCreditRating;

        return $this;
    }

    public function getDcRatingDate(): ?string
    {
        return $this->dcRatingDate;
    }

    public function setDcRatingDate(?string $dcRatingDate): self
    {
        $this->dcRatingDate = $dcRatingDate;

        return $this;
    }

    public function getDcLimitDate(): ?string
    {
        return $this->dcLimitDate;
    }

    public function setDcLimitDate(?string $dcLimitDate): self
    {
        $this->dcLimitDate = $dcLimitDate;

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

    public function getDcEquityInPercent(): ?string
    {
        return $this->dcEquityInPercent;
    }

    public function setDcEquityInPercent(?string $dcEquityInPercent): self
    {
        $this->dcEquityInPercent = $dcEquityInPercent;

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

    public function getDcLiquidAcidTest(): ?string
    {
        return $this->dcLiquidAcidTest;
    }

    public function setDcLiquidAcidTest(?string $dcLiquidAcidTest): self
    {
        $this->dcLiquidAcidTest = $dcLiquidAcidTest;

        return $this;
    }

    public function getDcRetCapEmpPercent(): ?string
    {
        return $this->dcRetCapEmpPercent;
    }

    public function setDcRetCapEmpPercent(?string $dcRetCapEmpPercent): self
    {
        $this->dcRetCapEmpPercent = $dcRetCapEmpPercent;

        return $this;
    }

    public function getDcRetTotalAssetsEmpPercent(): ?string
    {
        return $this->dcRetTotalAssetsEmpPercent;
    }

    public function setDcRetTotalAssetsEmpPercent(?string $dcRetTotalAssetsEmpPercent): self
    {
        $this->dcRetTotalAssetsEmpPercent = $dcRetTotalAssetsEmpPercent;

        return $this;
    }

    public function getDcCurrentDebtRatioPercent(): ?string
    {
        return $this->dcCurrentDebtRatioPercent;
    }

    public function setDcCurrentDebtRatioPercent(?string $dcCurrentDebtRatioPercent): self
    {
        $this->dcCurrentDebtRatioPercent = $dcCurrentDebtRatioPercent;

        return $this;
    }

    public function getDcTotalDebtRatioPercent(): ?string
    {
        return $this->dcTotalDebtRatioPercent;
    }

    public function setDcTotalDebtRatioPercent(?string $dcTotalDebtRatioPercent): self
    {
        $this->dcTotalDebtRatioPercent = $dcTotalDebtRatioPercent;

        return $this;
    }

    public function getDcStockTurnoverRatioPercent(): ?string
    {
        return $this->dcStockTurnoverRatioPercent;
    }

    public function setDcStockTurnoverRatioPercent(?string $dcStockTurnoverRatioPercent): self
    {
        $this->dcStockTurnoverRatioPercent = $dcStockTurnoverRatioPercent;

        return $this;
    }

    public function getDcRetNetAssetsEmpPercent(): ?string
    {
        return $this->dcRetNetAssetsEmpPercent;
    }

    public function setDcRetNetAssetsEmpPercent(?string $dcRetNetAssetsEmpPercent): self
    {
        $this->dcRetNetAssetsEmpPercent = $dcRetNetAssetsEmpPercent;

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

    public function getDcSalesNetWorkingCapital(): ?string
    {
        return $this->dcSalesNetWorkingCapital;
    }

    public function setDcSalesNetWorkingCapital(?string $dcSalesNetWorkingCapital): self
    {
        $this->dcSalesNetWorkingCapital = $dcSalesNetWorkingCapital;

        return $this;
    }

    public function getDcGearingRatioPercent(): ?string
    {
        return $this->dcGearingRatioPercent;
    }

    public function setDcGearingRatioPercent(?string $dcGearingRatioPercent): self
    {
        $this->dcGearingRatioPercent = $dcGearingRatioPercent;

        return $this;
    }

    public function getDcCcjCounts(): ?string
    {
        return $this->dcCcjCounts;
    }

    public function setDcCcjCounts(?string $dcCcjCounts): self
    {
        $this->dcCcjCounts = $dcCcjCounts;

        return $this;
    }

    public function getDcCcjValue(): ?string
    {
        return $this->dcCcjValue;
    }

    public function setDcCcjValue(?string $dcCcjValue): self
    {
        $this->dcCcjValue = $dcCcjValue;

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

    public function getDcPrincipleActivity(): ?string
    {
        return $this->dcPrincipleActivity;
    }

    public function setDcPrincipleActivity(?string $dcPrincipleActivity): self
    {
        $this->dcPrincipleActivity = $dcPrincipleActivity;

        return $this;
    }

    public function getDcNetCashflowOps(): ?string
    {
        return $this->dcNetCashflowOps;
    }

    public function setDcNetCashflowOps(?string $dcNetCashflowOps): self
    {
        $this->dcNetCashflowOps = $dcNetCashflowOps;

        return $this;
    }

    public function getDcNetCashflowBeforeFin(): ?string
    {
        return $this->dcNetCashflowBeforeFin;
    }

    public function setDcNetCashflowBeforeFin(?string $dcNetCashflowBeforeFin): self
    {
        $this->dcNetCashflowBeforeFin = $dcNetCashflowBeforeFin;

        return $this;
    }

    public function getDcNetCashflowFromFin(): ?string
    {
        return $this->dcNetCashflowFromFin;
    }

    public function setDcNetCashflowFromFin(?string $dcNetCashflowFromFin): self
    {
        $this->dcNetCashflowFromFin = $dcNetCashflowFromFin;

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

    public function getDcCapitalEmployed(): ?string
    {
        return $this->dcCapitalEmployed;
    }

    public function setDcCapitalEmployed(?string $dcCapitalEmployed): self
    {
        $this->dcCapitalEmployed = $dcCapitalEmployed;

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

    public function getDcAuditorsQual(): ?string
    {
        return $this->dcAuditorsQual;
    }

    public function setDcAuditorsQual(?string $dcAuditorsQual): self
    {
        $this->dcAuditorsQual = $dcAuditorsQual;

        return $this;
    }

    public function getDcBankers(): ?string
    {
        return $this->dcBankers;
    }

    public function setDcBankers(?string $dcBankers): self
    {
        $this->dcBankers = $dcBankers;

        return $this;
    }

    public function getDcMtgOutstanding(): ?string
    {
        return $this->dcMtgOutstanding;
    }

    public function setDcMtgOutstanding(?string $dcMtgOutstanding): self
    {
        $this->dcMtgOutstanding = $dcMtgOutstanding;

        return $this;
    }

    public function getDcMtgOutstandingTimestamp(): ?string
    {
        return $this->dcMtgOutstandingTimestamp;
    }

    public function setDcMtgOutstandingTimestamp(?string $dcMtgOutstandingTimestamp): self
    {
        $this->dcMtgOutstandingTimestamp = $dcMtgOutstandingTimestamp;

        return $this;
    }

    public function getDcMtgSatisfied(): ?string
    {
        return $this->dcMtgSatisfied;
    }

    public function setDcMtgSatisfied(?string $dcMtgSatisfied): self
    {
        $this->dcMtgSatisfied = $dcMtgSatisfied;

        return $this;
    }

    public function getDcMtgSatisfiedTimestamp(): ?string
    {
        return $this->dcMtgSatisfiedTimestamp;
    }

    public function setDcMtgSatisfiedTimestamp(?string $dcMtgSatisfiedTimestamp): self
    {
        $this->dcMtgSatisfiedTimestamp = $dcMtgSatisfiedTimestamp;

        return $this;
    }

    public function getDcMtgPartial(): ?string
    {
        return $this->dcMtgPartial;
    }

    public function setDcMtgPartial(?string $dcMtgPartial): self
    {
        $this->dcMtgPartial = $dcMtgPartial;

        return $this;
    }

    public function getDcMtgPartialTimestamp(): ?string
    {
        return $this->dcMtgPartialTimestamp;
    }

    public function setDcMtgPartialTimestamp(?string $dcMtgPartialTimestamp): self
    {
        $this->dcMtgPartialTimestamp = $dcMtgPartialTimestamp;

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

    public function getDcIntangibleAssets(): ?string
    {
        return $this->dcIntangibleAssets;
    }

    public function setDcIntangibleAssets(?string $dcIntangibleAssets): self
    {
        $this->dcIntangibleAssets = $dcIntangibleAssets;

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

    public function getDcTotalCurrentAssets(): ?string
    {
        return $this->dcTotalCurrentAssets;
    }

    public function setDcTotalCurrentAssets(?string $dcTotalCurrentAssets): self
    {
        $this->dcTotalCurrentAssets = $dcTotalCurrentAssets;

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

    public function getDcOtherCurrentAssets(): ?string
    {
        return $this->dcOtherCurrentAssets;
    }

    public function setDcOtherCurrentAssets(?string $dcOtherCurrentAssets): self
    {
        $this->dcOtherCurrentAssets = $dcOtherCurrentAssets;

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

    public function getDcTotalAssets(): ?string
    {
        return $this->dcTotalAssets;
    }

    public function setDcTotalAssets(?string $dcTotalAssets): self
    {
        $this->dcTotalAssets = $dcTotalAssets;

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

    public function getDcTradeCreditors(): ?string
    {
        return $this->dcTradeCreditors;
    }

    public function setDcTradeCreditors(?string $dcTradeCreditors): self
    {
        $this->dcTradeCreditors = $dcTradeCreditors;

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

    public function getDcOthShortTermFin(): ?string
    {
        return $this->dcOthShortTermFin;
    }

    public function setDcOthShortTermFin(?string $dcOthShortTermFin): self
    {
        $this->dcOthShortTermFin = $dcOthShortTermFin;

        return $this;
    }

    public function getDcMisvCurrentLiabilites(): ?string
    {
        return $this->dcMisvCurrentLiabilites;
    }

    public function setDcMisvCurrentLiabilites(?string $dcMisvCurrentLiabilites): self
    {
        $this->dcMisvCurrentLiabilites = $dcMisvCurrentLiabilites;

        return $this;
    }

    public function getDcOthLongTermFinance(): ?string
    {
        return $this->dcOthLongTermFinance;
    }

    public function setDcOthLongTermFinance(?string $dcOthLongTermFinance): self
    {
        $this->dcOthLongTermFinance = $dcOthLongTermFinance;

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

    public function getDcTotalOverdraftLtl(): ?string
    {
        return $this->dcTotalOverdraftLtl;
    }

    public function setDcTotalOverdraftLtl(?string $dcTotalOverdraftLtl): self
    {
        $this->dcTotalOverdraftLtl = $dcTotalOverdraftLtl;

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

    public function getDcNetAssets(): ?string
    {
        return $this->dcNetAssets;
    }

    public function setDcNetAssets(?string $dcNetAssets): self
    {
        $this->dcNetAssets = $dcNetAssets;

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

    public function getDcPaidUpCapital(): ?string
    {
        return $this->dcPaidUpCapital;
    }

    public function setDcPaidUpCapital(?string $dcPaidUpCapital): self
    {
        $this->dcPaidUpCapital = $dcPaidUpCapital;

        return $this;
    }

    public function getDcProfitLossActReserve(): ?string
    {
        return $this->dcProfitLossActReserve;
    }

    public function setDcProfitLossActReserve(?string $dcProfitLossActReserve): self
    {
        $this->dcProfitLossActReserve = $dcProfitLossActReserve;

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

    public function getDcReevalReserves(): ?string
    {
        return $this->dcReevalReserves;
    }

    public function setDcReevalReserves(?string $dcReevalReserves): self
    {
        $this->dcReevalReserves = $dcReevalReserves;

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

    public function getDcNetWorth(): ?string
    {
        return $this->dcNetWorth;
    }

    public function setDcNetWorth(?string $dcNetWorth): self
    {
        $this->dcNetWorth = $dcNetWorth;

        return $this;
    }

    public function getDcAccountsToFrom(): ?string
    {
        return $this->dcAccountsToFrom;
    }

    public function setDcAccountsToFrom(?string $dcAccountsToFrom): self
    {
        $this->dcAccountsToFrom = $dcAccountsToFrom;

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

    public function getDcWagesSalaries(): ?string
    {
        return $this->dcWagesSalaries;
    }

    public function setDcWagesSalaries(?string $dcWagesSalaries): self
    {
        $this->dcWagesSalaries = $dcWagesSalaries;

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

    public function getDcInterestPayments(): ?string
    {
        return $this->dcInterestPayments;
    }

    public function setDcInterestPayments(?string $dcInterestPayments): self
    {
        $this->dcInterestPayments = $dcInterestPayments;

        return $this;
    }

    public function getDcPretaxProfit(): ?string
    {
        return $this->dcPretaxProfit;
    }

    public function setDcPretaxProfit(?string $dcPretaxProfit): self
    {
        $this->dcPretaxProfit = $dcPretaxProfit;

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

    public function getDcDividendsPayable(): ?string
    {
        return $this->dcDividendsPayable;
    }

    public function setDcDividendsPayable(?string $dcDividendsPayable): self
    {
        $this->dcDividendsPayable = $dcDividendsPayable;

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

    public function getDcPretaxMargin(): ?string
    {
        return $this->dcPretaxMargin;
    }

    public function setDcPretaxMargin(?string $dcPretaxMargin): self
    {
        $this->dcPretaxMargin = $dcPretaxMargin;

        return $this;
    }

    public function getDcPosttaxProfit(): ?string
    {
        return $this->dcPosttaxProfit;
    }

    public function setDcPosttaxProfit(?string $dcPosttaxProfit): self
    {
        $this->dcPosttaxProfit = $dcPosttaxProfit;

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

    public function getDateadded()
    {
        return $this->dateadded;
    }

    public function setDateadded($dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAsoffdate()
    {
        return $this->asoffdate;
    }

    public function setAsoffdate($asoffdate)
    {
        $this->asoffdate = $asoffdate;

        return $this;
    }



}
