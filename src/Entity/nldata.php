<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="nldata", schema="creditsafe", uniqueConstraints={@ORM\UniqueConstraint(name="nldata_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="App\Repository\nldataRepository")
 */
class nldata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.nldata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui11", type="string", nullable=true)
     */
    private $accountidUi11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber10", type="string", nullable=true)
     */
    private $customernumber10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname10", type="string", nullable=true)
     */
    private $accountname10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber10", type="string", nullable=true)
     */
    private $registrationnumber10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry10", type="string", nullable=true)
     */
    private $billingcountry10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince10", type="string", nullable=true)
     */
    private $billingstateprovince10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity10", type="string", nullable=true)
     */
    private $billingcity10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet10", type="string", nullable=true)
     */
    private $billingstreet10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode9", type="string", nullable=true)
     */
    private $billingzippostalcode9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber10", type="string", nullable=true)
     */
    private $vatnumber10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone10", type="string", nullable=true)
     */
    private $accountphone10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname10", type="string", nullable=true)
     */
    private $firstname10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename10", type="string", nullable=true)
     */
    private $middlename10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname10", type="string", nullable=true)
     */
    private $lastname10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated10", type="string", nullable=true)
     */
    private $primaryemailupdated10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone10", type="string", nullable=true)
     */
    private $workphone10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_safe_number", type="string", nullable=true)
     */
    private $dcSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_name_short", type="string", nullable=true)
     */
    private $dcCompanyNameShort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_company_name_long", type="string", nullable=true)
     */
    private $dcCompanyNameLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_house_no", type="string", nullable=true)
     */
    private $dcHouseNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_house_no_extension", type="string", nullable=true)
     */
    private $dcHouseNoExtension;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_street_name", type="string", nullable=true)
     */
    private $dcStreetName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_city", type="string", nullable=true)
     */
    private $dcCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_postal_code", type="string", nullable=true)
     */
    private $dcPostalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_file_no", type="string", nullable=true)
     */
    private $dcFileNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_file_sub_no", type="string", nullable=true)
     */
    private $dcFileSubNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_id", type="string", nullable=true)
     */
    private $dcGgsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trading_name", type="string", nullable=true)
     */
    private $dcTradingName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_house_no", type="string", nullable=true)
     */
    private $dcTradeHouseNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_house_no_extention", type="string", nullable=true)
     */
    private $dcTradeHouseNoExtention;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_street_name", type="string", nullable=true)
     */
    private $dcTradeStreetName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_city", type="string", nullable=true)
     */
    private $dcTradeCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_trade_postcode", type="string", nullable=true)
     */
    private $dcTradePostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_area_phone_no", type="string", nullable=true)
     */
    private $dcAreaPhoneNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_internet_address", type="string", nullable=true)
     */
    private $dcInternetAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mps_flag", type="string", nullable=true)
     */
    private $dcMpsFlag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_import_flag", type="string", nullable=true)
     */
    private $dcImportFlag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_export_flag", type="string", nullable=true)
     */
    private $dcExportFlag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_employees", type="string", nullable=true)
     */
    private $dcEmployees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_legal_form_no", type="string", nullable=true)
     */
    private $dcLegalFormNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_legal_form_desc", type="string", nullable=true)
     */
    private $dcLegalFormDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_legal_form_desc_eng", type="string", nullable=true)
     */
    private $dcLegalFormDescEng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_activity_code", type="string", nullable=true)
     */
    private $dcActivityCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_activity_desc", type="string", nullable=true)
     */
    private $dcActivityDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_activity_desc_eng", type="string", nullable=true)
     */
    private $dcActivityDescEng;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_first_registration_date", type="string", nullable=true)
     */
    private $dcFirstRegistrationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_main_office_indicator", type="string", nullable=true)
     */
    private $dcMainOfficeIndicator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nominal_capital", type="string", nullable=true)
     */
    private $dcNominalCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_places_capital", type="string", nullable=true)
     */
    private $dcPlacesCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_deposited_capital", type="string", nullable=true)
     */
    private $dcDepositedCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_working_capital", type="string", nullable=true)
     */
    private $dcWorkingCapital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_economically_active", type="string", nullable=true)
     */
    private $dcEconomicallyActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_branch_number", type="string", nullable=true)
     */
    private $dcBranchNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_btw_number", type="string", nullable=true)
     */
    private $dcBtwNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rsin_number", type="string", nullable=true)
     */
    private $dcRsinNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_active", type="string", nullable=true)
     */
    private $dcIsActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_score_date", type="string", nullable=true)
     */
    private $dcCreditScoreDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_score", type="string", nullable=true)
     */
    private $dcCreditScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_score_desc", type="string", nullable=true)
     */
    private $dcCreditScoreDesc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_score_color", type="string", nullable=true)
     */
    private $dcCreditScoreColor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_limit_date", type="string", nullable=true)
     */
    private $dcCreditLimitDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_limit_no", type="string", nullable=true)
     */
    private $dcCreditLimitNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_international_score", type="string", nullable=true)
     */
    private $dcInternationalScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_accounts_end_date", type="string", nullable=true)
     */
    private $dcAccountsEndDate;

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
     * @ORM\Column(name="dc_fixed_assets", type="string", nullable=true)
     */
    private $dcFixedAssets;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_current_assets_total", type="string", nullable=true)
     */
    private $dcCurrentAssetsTotal;

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
     * @ORM\Column(name="dc_total_long_term_debts", type="string", nullable=true)
     */
    private $dcTotalLongTermDebts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_shareholders_equity", type="string", nullable=true)
     */
    private $dcShareholdersEquity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_worth", type="string", nullable=true)
     */
    private $dcNetWorth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_liquidity_ratio", type="string", nullable=true)
     */
    private $dcLiquidityRatio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_net_result", type="string", nullable=true)
     */
    private $dcNetResult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_register_letter", type="string", nullable=true)
     */
    private $dcRegisterLetter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_chamber_commerce_no", type="string", nullable=true)
     */
    private $dcChamberCommerceNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_founding_deed_date", type="string", nullable=true)
     */
    private $dcFoundingDeedDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_founding_data_asso_found", type="string", nullable=true)
     */
    private $dcFoundingDataAssoFound;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_continuance_date", type="string", nullable=true)
     */
    private $dcContinuanceDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_discontinuance_date", type="string", nullable=true)
     */
    private $dcDiscontinuanceDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_reg_deletion_no", type="string", nullable=true)
     */
    private $dcRegDeletionNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ultimate_holding_company_no", type="string", nullable=true)
     */
    private $dcUltimateHoldingCompanyNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ultimate_company_name", type="string", nullable=true)
     */
    private $dcUltimateCompanyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ultimate_company_score", type="string", nullable=true)
     */
    private $dcUltimateCompanyScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ultimate_company_dutch_rating_text", type="string", nullable=true)
     */
    private $dcUltimateCompanyDutchRatingText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ultimate_company_eng_rating_text", type="string", nullable=true)
     */
    private $dcUltimateCompanyEngRatingText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ultimate_company_limit", type="string", nullable=true)
     */
    private $dcUltimateCompanyLimit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_company_no", type="string", nullable=true)
     */
    private $dcParentCompanyNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_company_name", type="string", nullable=true)
     */
    private $dcParentCompanyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_company_score", type="string", nullable=true)
     */
    private $dcParentCompanyScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_company_dutch_rating_text", type="string", nullable=true)
     */
    private $dcParentCompanyDutchRatingText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_company_eng_rating_text", type="string", nullable=true)
     */
    private $dcParentCompanyEngRatingText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_parent_company_limit", type="string", nullable=true)
     */
    private $dcParentCompanyLimit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_executive_title1", type="string", nullable=true)
     */
    private $dcExecutiveTitle1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_executive_title2", type="string", nullable=true)
     */
    private $dcExecutiveTitle2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_executive_initials", type="string", nullable=true)
     */
    private $dcExecutiveInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_executive_prefix", type="string", nullable=true)
     */
    private $dcExecutivePrefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_executive_surname", type="string", nullable=true)
     */
    private $dcExecutiveSurname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_executive_gender", type="string", nullable=true)
     */
    private $dcExecutiveGender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mobile_phone", type="string", nullable=true)
     */
    private $dcMobilePhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_algorythm", type="string", nullable=true)
     */
    private $dcAlgorythm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_match_probability_percent", type="string", nullable=true)
     */
    private $dcMatchProbabilityPercent;

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

    public function getAccountidUi11(): ?string
    {
        return $this->accountidUi11;
    }

    public function setAccountidUi11(?string $accountidUi11): self
    {
        $this->accountidUi11 = $accountidUi11;

        return $this;
    }

    public function getCustomernumber10(): ?string
    {
        return $this->customernumber10;
    }

    public function setCustomernumber10(?string $customernumber10): self
    {
        $this->customernumber10 = $customernumber10;

        return $this;
    }

    public function getAccountname10(): ?string
    {
        return $this->accountname10;
    }

    public function setAccountname10(?string $accountname10): self
    {
        $this->accountname10 = $accountname10;

        return $this;
    }

    public function getRegistrationnumber10(): ?string
    {
        return $this->registrationnumber10;
    }

    public function setRegistrationnumber10(?string $registrationnumber10): self
    {
        $this->registrationnumber10 = $registrationnumber10;

        return $this;
    }

    public function getBillingcountry10(): ?string
    {
        return $this->billingcountry10;
    }

    public function setBillingcountry10(?string $billingcountry10): self
    {
        $this->billingcountry10 = $billingcountry10;

        return $this;
    }

    public function getBillingstateprovince10(): ?string
    {
        return $this->billingstateprovince10;
    }

    public function setBillingstateprovince10(?string $billingstateprovince10): self
    {
        $this->billingstateprovince10 = $billingstateprovince10;

        return $this;
    }

    public function getBillingcity10(): ?string
    {
        return $this->billingcity10;
    }

    public function setBillingcity10(?string $billingcity10): self
    {
        $this->billingcity10 = $billingcity10;

        return $this;
    }

    public function getBillingstreet10(): ?string
    {
        return $this->billingstreet10;
    }

    public function setBillingstreet10(?string $billingstreet10): self
    {
        $this->billingstreet10 = $billingstreet10;

        return $this;
    }

    public function getBillingzippostalcode9(): ?string
    {
        return $this->billingzippostalcode9;
    }

    public function setBillingzippostalcode9(?string $billingzippostalcode9): self
    {
        $this->billingzippostalcode9 = $billingzippostalcode9;

        return $this;
    }

    public function getVatnumber10(): ?string
    {
        return $this->vatnumber10;
    }

    public function setVatnumber10(?string $vatnumber10): self
    {
        $this->vatnumber10 = $vatnumber10;

        return $this;
    }

    public function getAccountphone10(): ?string
    {
        return $this->accountphone10;
    }

    public function setAccountphone10(?string $accountphone10): self
    {
        $this->accountphone10 = $accountphone10;

        return $this;
    }

    public function getFirstname10(): ?string
    {
        return $this->firstname10;
    }

    public function setFirstname10(?string $firstname10): self
    {
        $this->firstname10 = $firstname10;

        return $this;
    }

    public function getMiddlename10(): ?string
    {
        return $this->middlename10;
    }

    public function setMiddlename10(?string $middlename10): self
    {
        $this->middlename10 = $middlename10;

        return $this;
    }

    public function getLastname10(): ?string
    {
        return $this->lastname10;
    }

    public function setLastname10(?string $lastname10): self
    {
        $this->lastname10 = $lastname10;

        return $this;
    }

    public function getPrimaryemailupdated10(): ?string
    {
        return $this->primaryemailupdated10;
    }

    public function setPrimaryemailupdated10(?string $primaryemailupdated10): self
    {
        $this->primaryemailupdated10 = $primaryemailupdated10;

        return $this;
    }

    public function getWorkphone10(): ?string
    {
        return $this->workphone10;
    }

    public function setWorkphone10(?string $workphone10): self
    {
        $this->workphone10 = $workphone10;

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

    public function getDcCompanyNameShort(): ?string
    {
        return $this->dcCompanyNameShort;
    }

    public function setDcCompanyNameShort(?string $dcCompanyNameShort): self
    {
        $this->dcCompanyNameShort = $dcCompanyNameShort;

        return $this;
    }

    public function getDcCompanyNameLong(): ?string
    {
        return $this->dcCompanyNameLong;
    }

    public function setDcCompanyNameLong(?string $dcCompanyNameLong): self
    {
        $this->dcCompanyNameLong = $dcCompanyNameLong;

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

    public function getDcHouseNoExtension(): ?string
    {
        return $this->dcHouseNoExtension;
    }

    public function setDcHouseNoExtension(?string $dcHouseNoExtension): self
    {
        $this->dcHouseNoExtension = $dcHouseNoExtension;

        return $this;
    }

    public function getDcStreetName(): ?string
    {
        return $this->dcStreetName;
    }

    public function setDcStreetName(?string $dcStreetName): self
    {
        $this->dcStreetName = $dcStreetName;

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

    public function getDcPostalCode(): ?string
    {
        return $this->dcPostalCode;
    }

    public function setDcPostalCode(?string $dcPostalCode): self
    {
        $this->dcPostalCode = $dcPostalCode;

        return $this;
    }

    public function getDcFileNo(): ?string
    {
        return $this->dcFileNo;
    }

    public function setDcFileNo(?string $dcFileNo): self
    {
        $this->dcFileNo = $dcFileNo;

        return $this;
    }

    public function getDcFileSubNo(): ?string
    {
        return $this->dcFileSubNo;
    }

    public function setDcFileSubNo(?string $dcFileSubNo): self
    {
        $this->dcFileSubNo = $dcFileSubNo;

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

    public function getDcTradingName(): ?string
    {
        return $this->dcTradingName;
    }

    public function setDcTradingName(?string $dcTradingName): self
    {
        $this->dcTradingName = $dcTradingName;

        return $this;
    }

    public function getDcTradeHouseNo(): ?string
    {
        return $this->dcTradeHouseNo;
    }

    public function setDcTradeHouseNo(?string $dcTradeHouseNo): self
    {
        $this->dcTradeHouseNo = $dcTradeHouseNo;

        return $this;
    }

    public function getDcTradeHouseNoExtention(): ?string
    {
        return $this->dcTradeHouseNoExtention;
    }

    public function setDcTradeHouseNoExtention(?string $dcTradeHouseNoExtention): self
    {
        $this->dcTradeHouseNoExtention = $dcTradeHouseNoExtention;

        return $this;
    }

    public function getDcTradeStreetName(): ?string
    {
        return $this->dcTradeStreetName;
    }

    public function setDcTradeStreetName(?string $dcTradeStreetName): self
    {
        $this->dcTradeStreetName = $dcTradeStreetName;

        return $this;
    }

    public function getDcTradeCity(): ?string
    {
        return $this->dcTradeCity;
    }

    public function setDcTradeCity(?string $dcTradeCity): self
    {
        $this->dcTradeCity = $dcTradeCity;

        return $this;
    }

    public function getDcTradePostcode(): ?string
    {
        return $this->dcTradePostcode;
    }

    public function setDcTradePostcode(?string $dcTradePostcode): self
    {
        $this->dcTradePostcode = $dcTradePostcode;

        return $this;
    }

    public function getDcAreaPhoneNo(): ?string
    {
        return $this->dcAreaPhoneNo;
    }

    public function setDcAreaPhoneNo(?string $dcAreaPhoneNo): self
    {
        $this->dcAreaPhoneNo = $dcAreaPhoneNo;

        return $this;
    }

    public function getDcInternetAddress(): ?string
    {
        return $this->dcInternetAddress;
    }

    public function setDcInternetAddress(?string $dcInternetAddress): self
    {
        $this->dcInternetAddress = $dcInternetAddress;

        return $this;
    }

    public function getDcMpsFlag(): ?string
    {
        return $this->dcMpsFlag;
    }

    public function setDcMpsFlag(?string $dcMpsFlag): self
    {
        $this->dcMpsFlag = $dcMpsFlag;

        return $this;
    }

    public function getDcImportFlag(): ?string
    {
        return $this->dcImportFlag;
    }

    public function setDcImportFlag(?string $dcImportFlag): self
    {
        $this->dcImportFlag = $dcImportFlag;

        return $this;
    }

    public function getDcExportFlag(): ?string
    {
        return $this->dcExportFlag;
    }

    public function setDcExportFlag(?string $dcExportFlag): self
    {
        $this->dcExportFlag = $dcExportFlag;

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

    public function getDcLegalFormNo(): ?string
    {
        return $this->dcLegalFormNo;
    }

    public function setDcLegalFormNo(?string $dcLegalFormNo): self
    {
        $this->dcLegalFormNo = $dcLegalFormNo;

        return $this;
    }

    public function getDcLegalFormDesc(): ?string
    {
        return $this->dcLegalFormDesc;
    }

    public function setDcLegalFormDesc(?string $dcLegalFormDesc): self
    {
        $this->dcLegalFormDesc = $dcLegalFormDesc;

        return $this;
    }

    public function getDcLegalFormDescEng(): ?string
    {
        return $this->dcLegalFormDescEng;
    }

    public function setDcLegalFormDescEng(?string $dcLegalFormDescEng): self
    {
        $this->dcLegalFormDescEng = $dcLegalFormDescEng;

        return $this;
    }

    public function getDcActivityCode(): ?string
    {
        return $this->dcActivityCode;
    }

    public function setDcActivityCode(?string $dcActivityCode): self
    {
        $this->dcActivityCode = $dcActivityCode;

        return $this;
    }

    public function getDcActivityDesc(): ?string
    {
        return $this->dcActivityDesc;
    }

    public function setDcActivityDesc(?string $dcActivityDesc): self
    {
        $this->dcActivityDesc = $dcActivityDesc;

        return $this;
    }

    public function getDcActivityDescEng(): ?string
    {
        return $this->dcActivityDescEng;
    }

    public function setDcActivityDescEng(?string $dcActivityDescEng): self
    {
        $this->dcActivityDescEng = $dcActivityDescEng;

        return $this;
    }

    public function getDcFirstRegistrationDate(): ?string
    {
        return $this->dcFirstRegistrationDate;
    }

    public function setDcFirstRegistrationDate(?string $dcFirstRegistrationDate): self
    {
        $this->dcFirstRegistrationDate = $dcFirstRegistrationDate;

        return $this;
    }

    public function getDcMainOfficeIndicator(): ?string
    {
        return $this->dcMainOfficeIndicator;
    }

    public function setDcMainOfficeIndicator(?string $dcMainOfficeIndicator): self
    {
        $this->dcMainOfficeIndicator = $dcMainOfficeIndicator;

        return $this;
    }

    public function getDcNominalCapital(): ?string
    {
        return $this->dcNominalCapital;
    }

    public function setDcNominalCapital(?string $dcNominalCapital): self
    {
        $this->dcNominalCapital = $dcNominalCapital;

        return $this;
    }

    public function getDcPlacesCapital(): ?string
    {
        return $this->dcPlacesCapital;
    }

    public function setDcPlacesCapital(?string $dcPlacesCapital): self
    {
        $this->dcPlacesCapital = $dcPlacesCapital;

        return $this;
    }

    public function getDcDepositedCapital(): ?string
    {
        return $this->dcDepositedCapital;
    }

    public function setDcDepositedCapital(?string $dcDepositedCapital): self
    {
        $this->dcDepositedCapital = $dcDepositedCapital;

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

    public function getDcEconomicallyActive(): ?string
    {
        return $this->dcEconomicallyActive;
    }

    public function setDcEconomicallyActive(?string $dcEconomicallyActive): self
    {
        $this->dcEconomicallyActive = $dcEconomicallyActive;

        return $this;
    }

    public function getDcBranchNumber(): ?string
    {
        return $this->dcBranchNumber;
    }

    public function setDcBranchNumber(?string $dcBranchNumber): self
    {
        $this->dcBranchNumber = $dcBranchNumber;

        return $this;
    }

    public function getDcBtwNumber(): ?string
    {
        return $this->dcBtwNumber;
    }

    public function setDcBtwNumber(?string $dcBtwNumber): self
    {
        $this->dcBtwNumber = $dcBtwNumber;

        return $this;
    }

    public function getDcRsinNumber(): ?string
    {
        return $this->dcRsinNumber;
    }

    public function setDcRsinNumber(?string $dcRsinNumber): self
    {
        $this->dcRsinNumber = $dcRsinNumber;

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

    public function getDcCreditScoreDate(): ?string
    {
        return $this->dcCreditScoreDate;
    }

    public function setDcCreditScoreDate(?string $dcCreditScoreDate): self
    {
        $this->dcCreditScoreDate = $dcCreditScoreDate;

        return $this;
    }

    public function getDcCreditScore(): ?string
    {
        return $this->dcCreditScore;
    }

    public function setDcCreditScore(?string $dcCreditScore): self
    {
        $this->dcCreditScore = $dcCreditScore;

        return $this;
    }

    public function getDcCreditScoreDesc(): ?string
    {
        return $this->dcCreditScoreDesc;
    }

    public function setDcCreditScoreDesc(?string $dcCreditScoreDesc): self
    {
        $this->dcCreditScoreDesc = $dcCreditScoreDesc;

        return $this;
    }

    public function getDcCreditScoreColor(): ?string
    {
        return $this->dcCreditScoreColor;
    }

    public function setDcCreditScoreColor(?string $dcCreditScoreColor): self
    {
        $this->dcCreditScoreColor = $dcCreditScoreColor;

        return $this;
    }

    public function getDcCreditLimitDate(): ?string
    {
        return $this->dcCreditLimitDate;
    }

    public function setDcCreditLimitDate(?string $dcCreditLimitDate): self
    {
        $this->dcCreditLimitDate = $dcCreditLimitDate;

        return $this;
    }

    public function getDcCreditLimitNo(): ?string
    {
        return $this->dcCreditLimitNo;
    }

    public function setDcCreditLimitNo(?string $dcCreditLimitNo): self
    {
        $this->dcCreditLimitNo = $dcCreditLimitNo;

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

    public function getDcAccountsEndDate(): ?string
    {
        return $this->dcAccountsEndDate;
    }

    public function setDcAccountsEndDate(?string $dcAccountsEndDate): self
    {
        $this->dcAccountsEndDate = $dcAccountsEndDate;

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

    public function getDcFixedAssets(): ?string
    {
        return $this->dcFixedAssets;
    }

    public function setDcFixedAssets(?string $dcFixedAssets): self
    {
        $this->dcFixedAssets = $dcFixedAssets;

        return $this;
    }

    public function getDcCurrentAssetsTotal(): ?string
    {
        return $this->dcCurrentAssetsTotal;
    }

    public function setDcCurrentAssetsTotal(?string $dcCurrentAssetsTotal): self
    {
        $this->dcCurrentAssetsTotal = $dcCurrentAssetsTotal;

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

    public function getDcTotalLongTermDebts(): ?string
    {
        return $this->dcTotalLongTermDebts;
    }

    public function setDcTotalLongTermDebts(?string $dcTotalLongTermDebts): self
    {
        $this->dcTotalLongTermDebts = $dcTotalLongTermDebts;

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

    public function getDcNetWorth(): ?string
    {
        return $this->dcNetWorth;
    }

    public function setDcNetWorth(?string $dcNetWorth): self
    {
        $this->dcNetWorth = $dcNetWorth;

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

    public function getDcNetResult(): ?string
    {
        return $this->dcNetResult;
    }

    public function setDcNetResult(?string $dcNetResult): self
    {
        $this->dcNetResult = $dcNetResult;

        return $this;
    }

    public function getDcRegisterLetter(): ?string
    {
        return $this->dcRegisterLetter;
    }

    public function setDcRegisterLetter(?string $dcRegisterLetter): self
    {
        $this->dcRegisterLetter = $dcRegisterLetter;

        return $this;
    }

    public function getDcChamberCommerceNo(): ?string
    {
        return $this->dcChamberCommerceNo;
    }

    public function setDcChamberCommerceNo(?string $dcChamberCommerceNo): self
    {
        $this->dcChamberCommerceNo = $dcChamberCommerceNo;

        return $this;
    }

    public function getDcFoundingDeedDate(): ?string
    {
        return $this->dcFoundingDeedDate;
    }

    public function setDcFoundingDeedDate(?string $dcFoundingDeedDate): self
    {
        $this->dcFoundingDeedDate = $dcFoundingDeedDate;

        return $this;
    }

    public function getDcFoundingDataAssoFound(): ?string
    {
        return $this->dcFoundingDataAssoFound;
    }

    public function setDcFoundingDataAssoFound(?string $dcFoundingDataAssoFound): self
    {
        $this->dcFoundingDataAssoFound = $dcFoundingDataAssoFound;

        return $this;
    }

    public function getDcContinuanceDate(): ?string
    {
        return $this->dcContinuanceDate;
    }

    public function setDcContinuanceDate(?string $dcContinuanceDate): self
    {
        $this->dcContinuanceDate = $dcContinuanceDate;

        return $this;
    }

    public function getDcDiscontinuanceDate(): ?string
    {
        return $this->dcDiscontinuanceDate;
    }

    public function setDcDiscontinuanceDate(?string $dcDiscontinuanceDate): self
    {
        $this->dcDiscontinuanceDate = $dcDiscontinuanceDate;

        return $this;
    }

    public function getDcRegDeletionNo(): ?string
    {
        return $this->dcRegDeletionNo;
    }

    public function setDcRegDeletionNo(?string $dcRegDeletionNo): self
    {
        $this->dcRegDeletionNo = $dcRegDeletionNo;

        return $this;
    }

    public function getDcUltimateHoldingCompanyNo(): ?string
    {
        return $this->dcUltimateHoldingCompanyNo;
    }

    public function setDcUltimateHoldingCompanyNo(?string $dcUltimateHoldingCompanyNo): self
    {
        $this->dcUltimateHoldingCompanyNo = $dcUltimateHoldingCompanyNo;

        return $this;
    }

    public function getDcUltimateCompanyName(): ?string
    {
        return $this->dcUltimateCompanyName;
    }

    public function setDcUltimateCompanyName(?string $dcUltimateCompanyName): self
    {
        $this->dcUltimateCompanyName = $dcUltimateCompanyName;

        return $this;
    }

    public function getDcUltimateCompanyScore(): ?string
    {
        return $this->dcUltimateCompanyScore;
    }

    public function setDcUltimateCompanyScore(?string $dcUltimateCompanyScore): self
    {
        $this->dcUltimateCompanyScore = $dcUltimateCompanyScore;

        return $this;
    }

    public function getDcUltimateCompanyDutchRatingText(): ?string
    {
        return $this->dcUltimateCompanyDutchRatingText;
    }

    public function setDcUltimateCompanyDutchRatingText(?string $dcUltimateCompanyDutchRatingText): self
    {
        $this->dcUltimateCompanyDutchRatingText = $dcUltimateCompanyDutchRatingText;

        return $this;
    }

    public function getDcUltimateCompanyEngRatingText(): ?string
    {
        return $this->dcUltimateCompanyEngRatingText;
    }

    public function setDcUltimateCompanyEngRatingText(?string $dcUltimateCompanyEngRatingText): self
    {
        $this->dcUltimateCompanyEngRatingText = $dcUltimateCompanyEngRatingText;

        return $this;
    }

    public function getDcUltimateCompanyLimit(): ?string
    {
        return $this->dcUltimateCompanyLimit;
    }

    public function setDcUltimateCompanyLimit(?string $dcUltimateCompanyLimit): self
    {
        $this->dcUltimateCompanyLimit = $dcUltimateCompanyLimit;

        return $this;
    }

    public function getDcParentCompanyNo(): ?string
    {
        return $this->dcParentCompanyNo;
    }

    public function setDcParentCompanyNo(?string $dcParentCompanyNo): self
    {
        $this->dcParentCompanyNo = $dcParentCompanyNo;

        return $this;
    }

    public function getDcParentCompanyName(): ?string
    {
        return $this->dcParentCompanyName;
    }

    public function setDcParentCompanyName(?string $dcParentCompanyName): self
    {
        $this->dcParentCompanyName = $dcParentCompanyName;

        return $this;
    }

    public function getDcParentCompanyScore(): ?string
    {
        return $this->dcParentCompanyScore;
    }

    public function setDcParentCompanyScore(?string $dcParentCompanyScore): self
    {
        $this->dcParentCompanyScore = $dcParentCompanyScore;

        return $this;
    }

    public function getDcParentCompanyDutchRatingText(): ?string
    {
        return $this->dcParentCompanyDutchRatingText;
    }

    public function setDcParentCompanyDutchRatingText(?string $dcParentCompanyDutchRatingText): self
    {
        $this->dcParentCompanyDutchRatingText = $dcParentCompanyDutchRatingText;

        return $this;
    }

    public function getDcParentCompanyEngRatingText(): ?string
    {
        return $this->dcParentCompanyEngRatingText;
    }

    public function setDcParentCompanyEngRatingText(?string $dcParentCompanyEngRatingText): self
    {
        $this->dcParentCompanyEngRatingText = $dcParentCompanyEngRatingText;

        return $this;
    }

    public function getDcParentCompanyLimit(): ?string
    {
        return $this->dcParentCompanyLimit;
    }

    public function setDcParentCompanyLimit(?string $dcParentCompanyLimit): self
    {
        $this->dcParentCompanyLimit = $dcParentCompanyLimit;

        return $this;
    }

    public function getDcExecutiveTitle1(): ?string
    {
        return $this->dcExecutiveTitle1;
    }

    public function setDcExecutiveTitle1(?string $dcExecutiveTitle1): self
    {
        $this->dcExecutiveTitle1 = $dcExecutiveTitle1;

        return $this;
    }

    public function getDcExecutiveTitle2(): ?string
    {
        return $this->dcExecutiveTitle2;
    }

    public function setDcExecutiveTitle2(?string $dcExecutiveTitle2): self
    {
        $this->dcExecutiveTitle2 = $dcExecutiveTitle2;

        return $this;
    }

    public function getDcExecutiveInitials(): ?string
    {
        return $this->dcExecutiveInitials;
    }

    public function setDcExecutiveInitials(?string $dcExecutiveInitials): self
    {
        $this->dcExecutiveInitials = $dcExecutiveInitials;

        return $this;
    }

    public function getDcExecutivePrefix(): ?string
    {
        return $this->dcExecutivePrefix;
    }

    public function setDcExecutivePrefix(?string $dcExecutivePrefix): self
    {
        $this->dcExecutivePrefix = $dcExecutivePrefix;

        return $this;
    }

    public function getDcExecutiveSurname(): ?string
    {
        return $this->dcExecutiveSurname;
    }

    public function setDcExecutiveSurname(?string $dcExecutiveSurname): self
    {
        $this->dcExecutiveSurname = $dcExecutiveSurname;

        return $this;
    }

    public function getDcExecutiveGender(): ?string
    {
        return $this->dcExecutiveGender;
    }

    public function setDcExecutiveGender(?string $dcExecutiveGender): self
    {
        $this->dcExecutiveGender = $dcExecutiveGender;

        return $this;
    }

    public function getDcMobilePhone(): ?string
    {
        return $this->dcMobilePhone;
    }

    public function setDcMobilePhone(?string $dcMobilePhone): self
    {
        $this->dcMobilePhone = $dcMobilePhone;

        return $this;
    }

    public function getDcAlgorythm(): ?string
    {
        return $this->dcAlgorythm;
    }

    public function setDcAlgorythm(?string $dcAlgorythm): self
    {
        $this->dcAlgorythm = $dcAlgorythm;

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
