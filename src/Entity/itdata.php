<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="itdata", schema="creditsafe", uniqueConstraints={@ORM\UniqueConstraint(name="itdata_pkey", columns={"id"})} )
 * @ORM\Entity(repositoryClass="App\Repository\itdataRepository")
 */
class itdata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.itdata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui5", type="string", nullable=true)
     */
    private $accountidUi5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber4", type="string", nullable=true)
     */
    private $customernumber4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname4", type="string", nullable=true)
     */
    private $accountname4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber4", type="string", nullable=true)
     */
    private $registrationnumber4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry4", type="string", nullable=true)
     */
    private $billingcountry4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince4", type="string", nullable=true)
     */
    private $billingstateprovince4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity4", type="string", nullable=true)
     */
    private $billingcity4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet4", type="string", nullable=true)
     */
    private $billingstreet4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode4", type="string", nullable=true)
     */
    private $billingzippostalcode4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber4", type="string", nullable=true)
     */
    private $vatnumber4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone4", type="string", nullable=true)
     */
    private $accountphone4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname4", type="string", nullable=true)
     */
    private $firstname4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename4", type="string", nullable=true)
     */
    private $middlename4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname4", type="string", nullable=true)
     */
    private $lastname4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated4", type="string", nullable=true)
     */
    private $primaryemailupdated4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone4", type="string", nullable=true)
     */
    private $workphone4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_safe_number", type="string", nullable=true)
     */
    private $dcSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_numero_di_registrazione", type="string", nullable=true)
     */
    private $dcNumeroDiRegistrazione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_id", type="string", nullable=true)
     */
    private $dcGgsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nome_della_società", type="string", nullable=true)
     */
    private $dcNomeDellaSociet�;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_indirizzo1", type="string", nullable=true)
     */
    private $dcIndirizzo1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_cap", type="string", nullable=true)
     */
    private $dcCap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_citta", type="string", nullable=true)
     */
    private $dcCitta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sigla_provincia", type="string", nullable=true)
     */
    private $dcSiglaProvincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_regione", type="string", nullable=true)
     */
    private $dcRegione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_forma_legale", type="string", nullable=true)
     */
    private $dcFormaLegale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_provincia", type="string", nullable=true)
     */
    private $dcProvincia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_active", type="string", nullable=true)
     */
    private $dcIsActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_codice_fiscale", type="string", nullable=true)
     */
    private $dcCodiceFiscale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_numero_partita_iva", type="string", nullable=true)
     */
    private $dcNumeroPartitaIva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_numero_di_telefono", type="string", nullable=true)
     */
    private $dcNumeroDiTelefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_codice_ateco", type="string", nullable=true)
     */
    private $dcCodiceAteco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_descrizione_ateco", type="string", nullable=true)
     */
    private $dcDescrizioneAteco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_rea_inscrption_date", type="string", nullable=true)
     */
    private $dcReaInscrptionDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_numero_di_addetti", type="string", nullable=true)
     */
    private $dcNumeroDiAddetti;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_valore_della_produzione", type="string", nullable=true)
     */
    private $dcValoreDellaProduzione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_utile_perdita_dellesercizio", type="string", nullable=true)
     */
    private $dcUtilePerditaDellesercizio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_finanziari_data", type="string", nullable=true)
     */
    private $dcFinanziariData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_capitale_sociale", type="string", nullable=true)
     */
    private $dcCapitaleSociale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_classificazione", type="string", nullable=true)
     */
    private $dcClassificazione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_limite", type="string", nullable=true)
     */
    private $dcLimite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_stato", type="string", nullable=true)
     */
    private $dcStato;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_international_score", type="string", nullable=true)
     */
    private $dcInternationalScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nome_ult_società_capogruppo", type="string", nullable=true)
     */
    private $dcNomeUltSociet�Capogruppo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ult_capogruppo_safe_number", type="string", nullable=true)
     */
    private $dcUltCapogruppoSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ult_capogruppo_nazione", type="string", nullable=true)
     */
    private $dcUltCapogruppoNazione;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_società_capogruppo_nome", type="string", nullable=true)
     */
    private $dcSociet�CapogruppoNome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_capogruppo_safe_number", type="string", nullable=true)
     */
    private $dcCapogruppoSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_capogruppo_nazione", type="string", nullable=true)
     */
    private $dcCapogruppoNazione;

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

    public function getAccountidUi5(): ?string
    {
        return $this->accountidUi5;
    }

    public function setAccountidUi5(?string $accountidUi5): self
    {
        $this->accountidUi5 = $accountidUi5;

        return $this;
    }

    public function getCustomernumber4(): ?string
    {
        return $this->customernumber4;
    }

    public function setCustomernumber4(?string $customernumber4): self
    {
        $this->customernumber4 = $customernumber4;

        return $this;
    }

    public function getAccountname4(): ?string
    {
        return $this->accountname4;
    }

    public function setAccountname4(?string $accountname4): self
    {
        $this->accountname4 = $accountname4;

        return $this;
    }

    public function getRegistrationnumber4(): ?string
    {
        return $this->registrationnumber4;
    }

    public function setRegistrationnumber4(?string $registrationnumber4): self
    {
        $this->registrationnumber4 = $registrationnumber4;

        return $this;
    }

    public function getBillingcountry4(): ?string
    {
        return $this->billingcountry4;
    }

    public function setBillingcountry4(?string $billingcountry4): self
    {
        $this->billingcountry4 = $billingcountry4;

        return $this;
    }

    public function getBillingstateprovince4(): ?string
    {
        return $this->billingstateprovince4;
    }

    public function setBillingstateprovince4(?string $billingstateprovince4): self
    {
        $this->billingstateprovince4 = $billingstateprovince4;

        return $this;
    }

    public function getBillingcity4(): ?string
    {
        return $this->billingcity4;
    }

    public function setBillingcity4(?string $billingcity4): self
    {
        $this->billingcity4 = $billingcity4;

        return $this;
    }

    public function getBillingstreet4(): ?string
    {
        return $this->billingstreet4;
    }

    public function setBillingstreet4(?string $billingstreet4): self
    {
        $this->billingstreet4 = $billingstreet4;

        return $this;
    }

    public function getBillingzippostalcode4(): ?string
    {
        return $this->billingzippostalcode4;
    }

    public function setBillingzippostalcode4(?string $billingzippostalcode4): self
    {
        $this->billingzippostalcode4 = $billingzippostalcode4;

        return $this;
    }

    public function getVatnumber4(): ?string
    {
        return $this->vatnumber4;
    }

    public function setVatnumber4(?string $vatnumber4): self
    {
        $this->vatnumber4 = $vatnumber4;

        return $this;
    }

    public function getAccountphone4(): ?string
    {
        return $this->accountphone4;
    }

    public function setAccountphone4(?string $accountphone4): self
    {
        $this->accountphone4 = $accountphone4;

        return $this;
    }

    public function getFirstname4(): ?string
    {
        return $this->firstname4;
    }

    public function setFirstname4(?string $firstname4): self
    {
        $this->firstname4 = $firstname4;

        return $this;
    }

    public function getMiddlename4(): ?string
    {
        return $this->middlename4;
    }

    public function setMiddlename4(?string $middlename4): self
    {
        $this->middlename4 = $middlename4;

        return $this;
    }

    public function getLastname4(): ?string
    {
        return $this->lastname4;
    }

    public function setLastname4(?string $lastname4): self
    {
        $this->lastname4 = $lastname4;

        return $this;
    }

    public function getPrimaryemailupdated4(): ?string
    {
        return $this->primaryemailupdated4;
    }

    public function setPrimaryemailupdated4(?string $primaryemailupdated4): self
    {
        $this->primaryemailupdated4 = $primaryemailupdated4;

        return $this;
    }

    public function getWorkphone4(): ?string
    {
        return $this->workphone4;
    }

    public function setWorkphone4(?string $workphone4): self
    {
        $this->workphone4 = $workphone4;

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

    public function getDcNumeroDiRegistrazione(): ?string
    {
        return $this->dcNumeroDiRegistrazione;
    }

    public function setDcNumeroDiRegistrazione(?string $dcNumeroDiRegistrazione): self
    {
        $this->dcNumeroDiRegistrazione = $dcNumeroDiRegistrazione;

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

    public function getDcNomeDellaSociet�(): ?string
    {
        return $this->dcNomeDellaSociet�;
    }

    public function setDcNomeDellaSociet�(?string $dcNomeDellaSociet�): self
    {
        $this->dcNomeDellaSociet� = $dcNomeDellaSociet�;

        return $this;
    }

    public function getDcIndirizzo1(): ?string
    {
        return $this->dcIndirizzo1;
    }

    public function setDcIndirizzo1(?string $dcIndirizzo1): self
    {
        $this->dcIndirizzo1 = $dcIndirizzo1;

        return $this;
    }

    public function getDcCap(): ?string
    {
        return $this->dcCap;
    }

    public function setDcCap(?string $dcCap): self
    {
        $this->dcCap = $dcCap;

        return $this;
    }

    public function getDcCitta(): ?string
    {
        return $this->dcCitta;
    }

    public function setDcCitta(?string $dcCitta): self
    {
        $this->dcCitta = $dcCitta;

        return $this;
    }

    public function getDcSiglaProvincia(): ?string
    {
        return $this->dcSiglaProvincia;
    }

    public function setDcSiglaProvincia(?string $dcSiglaProvincia): self
    {
        $this->dcSiglaProvincia = $dcSiglaProvincia;

        return $this;
    }

    public function getDcRegione(): ?string
    {
        return $this->dcRegione;
    }

    public function setDcRegione(?string $dcRegione): self
    {
        $this->dcRegione = $dcRegione;

        return $this;
    }

    public function getDcFormaLegale(): ?string
    {
        return $this->dcFormaLegale;
    }

    public function setDcFormaLegale(?string $dcFormaLegale): self
    {
        $this->dcFormaLegale = $dcFormaLegale;

        return $this;
    }

    public function getDcProvincia(): ?string
    {
        return $this->dcProvincia;
    }

    public function setDcProvincia(?string $dcProvincia): self
    {
        $this->dcProvincia = $dcProvincia;

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

    public function getDcCodiceFiscale(): ?string
    {
        return $this->dcCodiceFiscale;
    }

    public function setDcCodiceFiscale(?string $dcCodiceFiscale): self
    {
        $this->dcCodiceFiscale = $dcCodiceFiscale;

        return $this;
    }

    public function getDcNumeroPartitaIva(): ?string
    {
        return $this->dcNumeroPartitaIva;
    }

    public function setDcNumeroPartitaIva(?string $dcNumeroPartitaIva): self
    {
        $this->dcNumeroPartitaIva = $dcNumeroPartitaIva;

        return $this;
    }

    public function getDcNumeroDiTelefono(): ?string
    {
        return $this->dcNumeroDiTelefono;
    }

    public function setDcNumeroDiTelefono(?string $dcNumeroDiTelefono): self
    {
        $this->dcNumeroDiTelefono = $dcNumeroDiTelefono;

        return $this;
    }

    public function getDcCodiceAteco(): ?string
    {
        return $this->dcCodiceAteco;
    }

    public function setDcCodiceAteco(?string $dcCodiceAteco): self
    {
        $this->dcCodiceAteco = $dcCodiceAteco;

        return $this;
    }

    public function getDcDescrizioneAteco(): ?string
    {
        return $this->dcDescrizioneAteco;
    }

    public function setDcDescrizioneAteco(?string $dcDescrizioneAteco): self
    {
        $this->dcDescrizioneAteco = $dcDescrizioneAteco;

        return $this;
    }

    public function getDcReaInscrptionDate(): ?string
    {
        return $this->dcReaInscrptionDate;
    }

    public function setDcReaInscrptionDate(?string $dcReaInscrptionDate): self
    {
        $this->dcReaInscrptionDate = $dcReaInscrptionDate;

        return $this;
    }

    public function getDcNumeroDiAddetti(): ?string
    {
        return $this->dcNumeroDiAddetti;
    }

    public function setDcNumeroDiAddetti(?string $dcNumeroDiAddetti): self
    {
        $this->dcNumeroDiAddetti = $dcNumeroDiAddetti;

        return $this;
    }

    public function getDcValoreDellaProduzione(): ?string
    {
        return $this->dcValoreDellaProduzione;
    }

    public function setDcValoreDellaProduzione(?string $dcValoreDellaProduzione): self
    {
        $this->dcValoreDellaProduzione = $dcValoreDellaProduzione;

        return $this;
    }

    public function getDcUtilePerditaDellesercizio(): ?string
    {
        return $this->dcUtilePerditaDellesercizio;
    }

    public function setDcUtilePerditaDellesercizio(?string $dcUtilePerditaDellesercizio): self
    {
        $this->dcUtilePerditaDellesercizio = $dcUtilePerditaDellesercizio;

        return $this;
    }

    public function getDcFinanziariData(): ?string
    {
        return $this->dcFinanziariData;
    }

    public function setDcFinanziariData(?string $dcFinanziariData): self
    {
        $this->dcFinanziariData = $dcFinanziariData;

        return $this;
    }

    public function getDcCapitaleSociale(): ?string
    {
        return $this->dcCapitaleSociale;
    }

    public function setDcCapitaleSociale(?string $dcCapitaleSociale): self
    {
        $this->dcCapitaleSociale = $dcCapitaleSociale;

        return $this;
    }

    public function getDcClassificazione(): ?string
    {
        return $this->dcClassificazione;
    }

    public function setDcClassificazione(?string $dcClassificazione): self
    {
        $this->dcClassificazione = $dcClassificazione;

        return $this;
    }

    public function getDcLimite(): ?string
    {
        return $this->dcLimite;
    }

    public function setDcLimite(?string $dcLimite): self
    {
        $this->dcLimite = $dcLimite;

        return $this;
    }

    public function getDcStato(): ?string
    {
        return $this->dcStato;
    }

    public function setDcStato(?string $dcStato): self
    {
        $this->dcStato = $dcStato;

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

    public function getDcNomeUltSociet�Capogruppo(): ?string
    {
        return $this->dcNomeUltSociet�Capogruppo;
    }

    public function setDcNomeUltSociet�Capogruppo(?string $dcNomeUltSociet�Capogruppo): self
    {
        $this->dcNomeUltSociet�Capogruppo = $dcNomeUltSociet�Capogruppo;

        return $this;
    }

    public function getDcUltCapogruppoSafeNumber(): ?string
    {
        return $this->dcUltCapogruppoSafeNumber;
    }

    public function setDcUltCapogruppoSafeNumber(?string $dcUltCapogruppoSafeNumber): self
    {
        $this->dcUltCapogruppoSafeNumber = $dcUltCapogruppoSafeNumber;

        return $this;
    }

    public function getDcUltCapogruppoNazione(): ?string
    {
        return $this->dcUltCapogruppoNazione;
    }

    public function setDcUltCapogruppoNazione(?string $dcUltCapogruppoNazione): self
    {
        $this->dcUltCapogruppoNazione = $dcUltCapogruppoNazione;

        return $this;
    }

    public function getDcSociet�CapogruppoNome(): ?string
    {
        return $this->dcSociet�CapogruppoNome;
    }

    public function setDcSociet�CapogruppoNome(?string $dcSociet�CapogruppoNome): self
    {
        $this->dcSociet�CapogruppoNome = $dcSociet�CapogruppoNome;

        return $this;
    }

    public function getDcCapogruppoSafeNumber(): ?string
    {
        return $this->dcCapogruppoSafeNumber;
    }

    public function setDcCapogruppoSafeNumber(?string $dcCapogruppoSafeNumber): self
    {
        $this->dcCapogruppoSafeNumber = $dcCapogruppoSafeNumber;

        return $this;
    }

    public function getDcCapogruppoNazione(): ?string
    {
        return $this->dcCapogruppoNazione;
    }

    public function setDcCapogruppoNazione(?string $dcCapogruppoNazione): self
    {
        $this->dcCapogruppoNazione = $dcCapogruppoNazione;

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
