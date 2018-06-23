<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="ludata", schema="creditsafe")
 * @ORM\Entity(repositoryClass="App\Repository\ludataRepository")
 */
class ludata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.ludata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui6", type="string", nullable=true)
     */
    private $accountidUi6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber5", type="string", nullable=true)
     */
    private $customernumber5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname5", type="string", nullable=true)
     */
    private $accountname5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber5", type="string", nullable=true)
     */
    private $registrationnumber5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry5", type="string", nullable=true)
     */
    private $billingcountry5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince5", type="string", nullable=true)
     */
    private $billingstateprovince5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity5", type="string", nullable=true)
     */
    private $billingcity5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet5", type="string", nullable=true)
     */
    private $billingstreet5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode5", type="string", nullable=true)
     */
    private $billingzippostalcode5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber5", type="string", nullable=true)
     */
    private $vatnumber5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone5", type="string", nullable=true)
     */
    private $accountphone5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname5", type="string", nullable=true)
     */
    private $firstname5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename5", type="string", nullable=true)
     */
    private $middlename5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname5", type="string", nullable=true)
     */
    private $lastname5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated5", type="string", nullable=true)
     */
    private $primaryemailupdated5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone5", type="string", nullable=true)
     */
    private $workphone5;

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
     * @ORM\Column(name="dc_reg_number_match", type="string", nullable=true)
     */
    private $dcRegNumberMatch;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_name", type="string", nullable=true)
     */
    private $dcName;

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
     * @ORM\Column(name="dc_postcode", type="string", nullable=true)
     */
    private $dcPostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_town", type="string", nullable=true)
     */
    private $dcTown;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_province_state", type="string", nullable=true)
     */
    private $dcProvinceState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_region", type="string", nullable=true)
     */
    private $dcRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_country", type="string", nullable=true)
     */
    private $dcCountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_active", type="string", nullable=true)
     */
    private $dcIsActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_phone", type="string", nullable=true)
     */
    private $dcPhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_activity_code", type="string", nullable=true)
     */
    private $dcActivityCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_common_activity_code", type="string", nullable=true)
     */
    private $dcCommonActivityCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_co_type", type="string", nullable=true)
     */
    private $dcCoType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_legal_form", type="string", nullable=true)
     */
    private $dcLegalForm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_reg_number", type="string", nullable=true)
     */
    private $dcRegNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_currency", type="string", nullable=true)
     */
    private $dcCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_org_number", type="string", nullable=true)
     */
    private $dcOrgNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_turnover", type="string", nullable=true)
     */
    private $dcTurnover;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_common_turnover", type="string", nullable=true)
     */
    private $dcCommonTurnover;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_creditworthy", type="string", nullable=true)
     */
    private $dcCreditworthy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_latest_accounts", type="string", nullable=true)
     */
    private $dcLatestAccounts;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_international_score", type="string", nullable=true)
     */
    private $dcInternationalScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_credit_score", type="string", nullable=true)
     */
    private $dcCreditScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_limit", type="string", nullable=true)
     */
    private $dcLimit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="algorithm", type="string", nullable=true)
     */
    private $algorithm;

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

    public function getAccountidUi6(): ?string
    {
        return $this->accountidUi6;
    }

    public function setAccountidUi6(?string $accountidUi6): self
    {
        $this->accountidUi6 = $accountidUi6;

        return $this;
    }

    public function getCustomernumber5(): ?string
    {
        return $this->customernumber5;
    }

    public function setCustomernumber5(?string $customernumber5): self
    {
        $this->customernumber5 = $customernumber5;

        return $this;
    }

    public function getAccountname5(): ?string
    {
        return $this->accountname5;
    }

    public function setAccountname5(?string $accountname5): self
    {
        $this->accountname5 = $accountname5;

        return $this;
    }

    public function getRegistrationnumber5(): ?string
    {
        return $this->registrationnumber5;
    }

    public function setRegistrationnumber5(?string $registrationnumber5): self
    {
        $this->registrationnumber5 = $registrationnumber5;

        return $this;
    }

    public function getBillingcountry5(): ?string
    {
        return $this->billingcountry5;
    }

    public function setBillingcountry5(?string $billingcountry5): self
    {
        $this->billingcountry5 = $billingcountry5;

        return $this;
    }

    public function getBillingstateprovince5(): ?string
    {
        return $this->billingstateprovince5;
    }

    public function setBillingstateprovince5(?string $billingstateprovince5): self
    {
        $this->billingstateprovince5 = $billingstateprovince5;

        return $this;
    }

    public function getBillingcity5(): ?string
    {
        return $this->billingcity5;
    }

    public function setBillingcity5(?string $billingcity5): self
    {
        $this->billingcity5 = $billingcity5;

        return $this;
    }

    public function getBillingstreet5(): ?string
    {
        return $this->billingstreet5;
    }

    public function setBillingstreet5(?string $billingstreet5): self
    {
        $this->billingstreet5 = $billingstreet5;

        return $this;
    }

    public function getBillingzippostalcode5(): ?string
    {
        return $this->billingzippostalcode5;
    }

    public function setBillingzippostalcode5(?string $billingzippostalcode5): self
    {
        $this->billingzippostalcode5 = $billingzippostalcode5;

        return $this;
    }

    public function getVatnumber5(): ?string
    {
        return $this->vatnumber5;
    }

    public function setVatnumber5(?string $vatnumber5): self
    {
        $this->vatnumber5 = $vatnumber5;

        return $this;
    }

    public function getAccountphone5(): ?string
    {
        return $this->accountphone5;
    }

    public function setAccountphone5(?string $accountphone5): self
    {
        $this->accountphone5 = $accountphone5;

        return $this;
    }

    public function getFirstname5(): ?string
    {
        return $this->firstname5;
    }

    public function setFirstname5(?string $firstname5): self
    {
        $this->firstname5 = $firstname5;

        return $this;
    }

    public function getMiddlename5(): ?string
    {
        return $this->middlename5;
    }

    public function setMiddlename5(?string $middlename5): self
    {
        $this->middlename5 = $middlename5;

        return $this;
    }

    public function getLastname5(): ?string
    {
        return $this->lastname5;
    }

    public function setLastname5(?string $lastname5): self
    {
        $this->lastname5 = $lastname5;

        return $this;
    }

    public function getPrimaryemailupdated5(): ?string
    {
        return $this->primaryemailupdated5;
    }

    public function setPrimaryemailupdated5(?string $primaryemailupdated5): self
    {
        $this->primaryemailupdated5 = $primaryemailupdated5;

        return $this;
    }

    public function getWorkphone5(): ?string
    {
        return $this->workphone5;
    }

    public function setWorkphone5(?string $workphone5): self
    {
        $this->workphone5 = $workphone5;

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

    public function getDcRegNumberMatch(): ?string
    {
        return $this->dcRegNumberMatch;
    }

    public function setDcRegNumberMatch(?string $dcRegNumberMatch): self
    {
        $this->dcRegNumberMatch = $dcRegNumberMatch;

        return $this;
    }

    public function getDcName(): ?string
    {
        return $this->dcName;
    }

    public function setDcName(?string $dcName): self
    {
        $this->dcName = $dcName;

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

    public function getDcPostcode(): ?string
    {
        return $this->dcPostcode;
    }

    public function setDcPostcode(?string $dcPostcode): self
    {
        $this->dcPostcode = $dcPostcode;

        return $this;
    }

    public function getDcTown(): ?string
    {
        return $this->dcTown;
    }

    public function setDcTown(?string $dcTown): self
    {
        $this->dcTown = $dcTown;

        return $this;
    }

    public function getDcProvinceState(): ?string
    {
        return $this->dcProvinceState;
    }

    public function setDcProvinceState(?string $dcProvinceState): self
    {
        $this->dcProvinceState = $dcProvinceState;

        return $this;
    }

    public function getDcRegion(): ?string
    {
        return $this->dcRegion;
    }

    public function setDcRegion(?string $dcRegion): self
    {
        $this->dcRegion = $dcRegion;

        return $this;
    }

    public function getDcCountry(): ?string
    {
        return $this->dcCountry;
    }

    public function setDcCountry(?string $dcCountry): self
    {
        $this->dcCountry = $dcCountry;

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

    public function getDcPhone(): ?string
    {
        return $this->dcPhone;
    }

    public function setDcPhone(?string $dcPhone): self
    {
        $this->dcPhone = $dcPhone;

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

    public function getDcCommonActivityCode(): ?string
    {
        return $this->dcCommonActivityCode;
    }

    public function setDcCommonActivityCode(?string $dcCommonActivityCode): self
    {
        $this->dcCommonActivityCode = $dcCommonActivityCode;

        return $this;
    }

    public function getDcCoType(): ?string
    {
        return $this->dcCoType;
    }

    public function setDcCoType(?string $dcCoType): self
    {
        $this->dcCoType = $dcCoType;

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

    public function getDcRegNumber(): ?string
    {
        return $this->dcRegNumber;
    }

    public function setDcRegNumber(?string $dcRegNumber): self
    {
        $this->dcRegNumber = $dcRegNumber;

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

    public function getDcOrgNumber(): ?string
    {
        return $this->dcOrgNumber;
    }

    public function setDcOrgNumber(?string $dcOrgNumber): self
    {
        $this->dcOrgNumber = $dcOrgNumber;

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

    public function getDcCommonTurnover(): ?string
    {
        return $this->dcCommonTurnover;
    }

    public function setDcCommonTurnover(?string $dcCommonTurnover): self
    {
        $this->dcCommonTurnover = $dcCommonTurnover;

        return $this;
    }

    public function getDcCreditworthy(): ?string
    {
        return $this->dcCreditworthy;
    }

    public function setDcCreditworthy(?string $dcCreditworthy): self
    {
        $this->dcCreditworthy = $dcCreditworthy;

        return $this;
    }

    public function getDcLatestAccounts(): ?string
    {
        return $this->dcLatestAccounts;
    }

    public function setDcLatestAccounts(?string $dcLatestAccounts): self
    {
        $this->dcLatestAccounts = $dcLatestAccounts;

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

    public function getDcCreditScore(): ?string
    {
        return $this->dcCreditScore;
    }

    public function setDcCreditScore(?string $dcCreditScore): self
    {
        $this->dcCreditScore = $dcCreditScore;

        return $this;
    }

    public function getDcLimit(): ?string
    {
        return $this->dcLimit;
    }

    public function setDcLimit(?string $dcLimit): self
    {
        $this->dcLimit = $dcLimit;

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
