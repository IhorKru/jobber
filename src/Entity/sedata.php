<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="sedata", schema="creditsafe")
 * @ORM\Entity(repositoryClass="App\Repository\sedataRepository")
 */
class sedata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.sedata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui4", type="string", nullable=true)
     */
    private $accountidUi4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber3", type="string", nullable=true)
     */
    private $customernumber3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname3", type="string", nullable=true)
     */
    private $accountname3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber3", type="string", nullable=true)
     */
    private $registrationnumber3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry3", type="string", nullable=true)
     */
    private $billingcountry3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince3", type="string", nullable=true)
     */
    private $billingstateprovince3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity3", type="string", nullable=true)
     */
    private $billingcity3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet3", type="string", nullable=true)
     */
    private $billingstreet3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode3", type="string", nullable=true)
     */
    private $billingzippostalcode3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber3", type="string", nullable=true)
     */
    private $vatnumber3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone3", type="string", nullable=true)
     */
    private $accountphone3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname3", type="string", nullable=true)
     */
    private $firstname3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename3", type="string", nullable=true)
     */
    private $middlename3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname3", type="string", nullable=true)
     */
    private $lastname3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated3", type="string", nullable=true)
     */
    private $primaryemailupdated3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone3", type="string", nullable=true)
     */
    private $workphone3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_id", type="string", nullable=true)
     */
    private $dcGgsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="safe_number", type="string", nullable=true)
     */
    private $safeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="org_number", type="string", nullable=true)
     */
    private $orgNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="non_ltd_number", type="string", nullable=true)
     */
    private $nonLtdNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_business_name", type="string", nullable=true)
     */
    private $dcBusinessName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_industry_code", type="string", nullable=true)
     */
    private $dcIndustryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_tel_number", type="string", nullable=true)
     */
    private $dcTelNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_active", type="string", nullable=true)
     */
    private $dcIsActive;

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
     * @ORM\Column(name="dc_city", type="string", nullable=true)
     */
    private $dcCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_region", type="string", nullable=true)
     */
    private $dcRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_zip_code", type="string", nullable=true)
     */
    private $dcZipCode;

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

    public function getAccountidUi4(): ?string
    {
        return $this->accountidUi4;
    }

    public function setAccountidUi4(?string $accountidUi4): self
    {
        $this->accountidUi4 = $accountidUi4;

        return $this;
    }

    public function getCustomernumber3(): ?string
    {
        return $this->customernumber3;
    }

    public function setCustomernumber3(?string $customernumber3): self
    {
        $this->customernumber3 = $customernumber3;

        return $this;
    }

    public function getAccountname3(): ?string
    {
        return $this->accountname3;
    }

    public function setAccountname3(?string $accountname3): self
    {
        $this->accountname3 = $accountname3;

        return $this;
    }

    public function getRegistrationnumber3(): ?string
    {
        return $this->registrationnumber3;
    }

    public function setRegistrationnumber3(?string $registrationnumber3): self
    {
        $this->registrationnumber3 = $registrationnumber3;

        return $this;
    }

    public function getBillingcountry3(): ?string
    {
        return $this->billingcountry3;
    }

    public function setBillingcountry3(?string $billingcountry3): self
    {
        $this->billingcountry3 = $billingcountry3;

        return $this;
    }

    public function getBillingstateprovince3(): ?string
    {
        return $this->billingstateprovince3;
    }

    public function setBillingstateprovince3(?string $billingstateprovince3): self
    {
        $this->billingstateprovince3 = $billingstateprovince3;

        return $this;
    }

    public function getBillingcity3(): ?string
    {
        return $this->billingcity3;
    }

    public function setBillingcity3(?string $billingcity3): self
    {
        $this->billingcity3 = $billingcity3;

        return $this;
    }

    public function getBillingstreet3(): ?string
    {
        return $this->billingstreet3;
    }

    public function setBillingstreet3(?string $billingstreet3): self
    {
        $this->billingstreet3 = $billingstreet3;

        return $this;
    }

    public function getBillingzippostalcode3(): ?string
    {
        return $this->billingzippostalcode3;
    }

    public function setBillingzippostalcode3(?string $billingzippostalcode3): self
    {
        $this->billingzippostalcode3 = $billingzippostalcode3;

        return $this;
    }

    public function getVatnumber3(): ?string
    {
        return $this->vatnumber3;
    }

    public function setVatnumber3(?string $vatnumber3): self
    {
        $this->vatnumber3 = $vatnumber3;

        return $this;
    }

    public function getAccountphone3(): ?string
    {
        return $this->accountphone3;
    }

    public function setAccountphone3(?string $accountphone3): self
    {
        $this->accountphone3 = $accountphone3;

        return $this;
    }

    public function getFirstname3(): ?string
    {
        return $this->firstname3;
    }

    public function setFirstname3(?string $firstname3): self
    {
        $this->firstname3 = $firstname3;

        return $this;
    }

    public function getMiddlename3(): ?string
    {
        return $this->middlename3;
    }

    public function setMiddlename3(?string $middlename3): self
    {
        $this->middlename3 = $middlename3;

        return $this;
    }

    public function getLastname3(): ?string
    {
        return $this->lastname3;
    }

    public function setLastname3(?string $lastname3): self
    {
        $this->lastname3 = $lastname3;

        return $this;
    }

    public function getPrimaryemailupdated3(): ?string
    {
        return $this->primaryemailupdated3;
    }

    public function setPrimaryemailupdated3(?string $primaryemailupdated3): self
    {
        $this->primaryemailupdated3 = $primaryemailupdated3;

        return $this;
    }

    public function getWorkphone3(): ?string
    {
        return $this->workphone3;
    }

    public function setWorkphone3(?string $workphone3): self
    {
        $this->workphone3 = $workphone3;

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

    public function getSafeNumber(): ?string
    {
        return $this->safeNumber;
    }

    public function setSafeNumber(?string $safeNumber): self
    {
        $this->safeNumber = $safeNumber;

        return $this;
    }

    public function getOrgNumber(): ?string
    {
        return $this->orgNumber;
    }

    public function setOrgNumber(?string $orgNumber): self
    {
        $this->orgNumber = $orgNumber;

        return $this;
    }

    public function getNonLtdNumber(): ?string
    {
        return $this->nonLtdNumber;
    }

    public function setNonLtdNumber(?string $nonLtdNumber): self
    {
        $this->nonLtdNumber = $nonLtdNumber;

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

    public function getDcIndustryCode(): ?string
    {
        return $this->dcIndustryCode;
    }

    public function setDcIndustryCode(?string $dcIndustryCode): self
    {
        $this->dcIndustryCode = $dcIndustryCode;

        return $this;
    }

    public function getDcTelNumber(): ?string
    {
        return $this->dcTelNumber;
    }

    public function setDcTelNumber(?string $dcTelNumber): self
    {
        $this->dcTelNumber = $dcTelNumber;

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

    public function getDcCity(): ?string
    {
        return $this->dcCity;
    }

    public function setDcCity(?string $dcCity): self
    {
        $this->dcCity = $dcCity;

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

    public function getDcZipCode(): ?string
    {
        return $this->dcZipCode;
    }

    public function setDcZipCode(?string $dcZipCode): self
    {
        $this->dcZipCode = $dcZipCode;

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
