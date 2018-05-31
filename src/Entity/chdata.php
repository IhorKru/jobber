<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="chdata", schema="creditsafe", uniqueConstraints={@ORM\UniqueConstraint(name="chdata_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="App\Repository\chdataRepository")
 */
class chdata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.chdata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui7", type="string", nullable=true)
     */
    private $accountidUi7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber6", type="string", nullable=true)
     */
    private $customernumber6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname6", type="string", nullable=true)
     */
    private $accountname6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber6", type="string", nullable=true)
     */
    private $registrationnumber6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry6", type="string", nullable=true)
     */
    private $billingcountry6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince6", type="string", nullable=true)
     */
    private $billingstateprovince6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity6", type="string", nullable=true)
     */
    private $billingcity6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet6", type="string", nullable=true)
     */
    private $billingstreet6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode6", type="string", nullable=true)
     */
    private $billingzippostalcode6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber6", type="string", nullable=true)
     */
    private $vatnumber6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone6", type="string", nullable=true)
     */
    private $accountphone6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname6", type="string", nullable=true)
     */
    private $firstname6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename6", type="string", nullable=true)
     */
    private $middlename6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname6", type="string", nullable=true)
     */
    private $lastname6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated6", type="string", nullable=true)
     */
    private $primaryemailupdated6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone6", type="string", nullable=true)
     */
    private $workphone6;

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

    public function getAccountidUi7(): ?string
    {
        return $this->accountidUi7;
    }

    public function setAccountidUi7(?string $accountidUi7): self
    {
        $this->accountidUi7 = $accountidUi7;

        return $this;
    }

    public function getCustomernumber6(): ?string
    {
        return $this->customernumber6;
    }

    public function setCustomernumber6(?string $customernumber6): self
    {
        $this->customernumber6 = $customernumber6;

        return $this;
    }

    public function getAccountname6(): ?string
    {
        return $this->accountname6;
    }

    public function setAccountname6(?string $accountname6): self
    {
        $this->accountname6 = $accountname6;

        return $this;
    }

    public function getRegistrationnumber6(): ?string
    {
        return $this->registrationnumber6;
    }

    public function setRegistrationnumber6(?string $registrationnumber6): self
    {
        $this->registrationnumber6 = $registrationnumber6;

        return $this;
    }

    public function getBillingcountry6(): ?string
    {
        return $this->billingcountry6;
    }

    public function setBillingcountry6(?string $billingcountry6): self
    {
        $this->billingcountry6 = $billingcountry6;

        return $this;
    }

    public function getBillingstateprovince6(): ?string
    {
        return $this->billingstateprovince6;
    }

    public function setBillingstateprovince6(?string $billingstateprovince6): self
    {
        $this->billingstateprovince6 = $billingstateprovince6;

        return $this;
    }

    public function getBillingcity6(): ?string
    {
        return $this->billingcity6;
    }

    public function setBillingcity6(?string $billingcity6): self
    {
        $this->billingcity6 = $billingcity6;

        return $this;
    }

    public function getBillingstreet6(): ?string
    {
        return $this->billingstreet6;
    }

    public function setBillingstreet6(?string $billingstreet6): self
    {
        $this->billingstreet6 = $billingstreet6;

        return $this;
    }

    public function getBillingzippostalcode6(): ?string
    {
        return $this->billingzippostalcode6;
    }

    public function setBillingzippostalcode6(?string $billingzippostalcode6): self
    {
        $this->billingzippostalcode6 = $billingzippostalcode6;

        return $this;
    }

    public function getVatnumber6(): ?string
    {
        return $this->vatnumber6;
    }

    public function setVatnumber6(?string $vatnumber6): self
    {
        $this->vatnumber6 = $vatnumber6;

        return $this;
    }

    public function getAccountphone6(): ?string
    {
        return $this->accountphone6;
    }

    public function setAccountphone6(?string $accountphone6): self
    {
        $this->accountphone6 = $accountphone6;

        return $this;
    }

    public function getFirstname6(): ?string
    {
        return $this->firstname6;
    }

    public function setFirstname6(?string $firstname6): self
    {
        $this->firstname6 = $firstname6;

        return $this;
    }

    public function getMiddlename6(): ?string
    {
        return $this->middlename6;
    }

    public function setMiddlename6(?string $middlename6): self
    {
        $this->middlename6 = $middlename6;

        return $this;
    }

    public function getLastname6(): ?string
    {
        return $this->lastname6;
    }

    public function setLastname6(?string $lastname6): self
    {
        $this->lastname6 = $lastname6;

        return $this;
    }

    public function getPrimaryemailupdated6(): ?string
    {
        return $this->primaryemailupdated6;
    }

    public function setPrimaryemailupdated6(?string $primaryemailupdated6): self
    {
        $this->primaryemailupdated6 = $primaryemailupdated6;

        return $this;
    }

    public function getWorkphone6(): ?string
    {
        return $this->workphone6;
    }

    public function setWorkphone6(?string $workphone6): self
    {
        $this->workphone6 = $workphone6;

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
