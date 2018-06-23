<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="frdata", schema="creditsafe")
 * @ORM\Entity(repositoryClass="App\Repository\frdataRepository")
 */
class frdata
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="creditsafe.frdata_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="accountid_ui10", type="string", nullable=true)
     */
    private $accountidUi10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customernumber9", type="string", nullable=true)
     */
    private $customernumber9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountname9", type="string", nullable=true)
     */
    private $accountname9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registrationnumber9", type="string", nullable=true)
     */
    private $registrationnumber9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcountry9", type="string", nullable=true)
     */
    private $billingcountry9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstateprovince9", type="string", nullable=true)
     */
    private $billingstateprovince9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingcity9", type="string", nullable=true)
     */
    private $billingcity9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingstreet9", type="string", nullable=true)
     */
    private $billingstreet9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="billingzippostalcode10", type="string", nullable=true)
     */
    private $billingzippostalcode10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vatnumber9", type="string", nullable=true)
     */
    private $vatnumber9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountphone9", type="string", nullable=true)
     */
    private $accountphone9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname9", type="string", nullable=true)
     */
    private $firstname9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="middlename9", type="string", nullable=true)
     */
    private $middlename9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname9", type="string", nullable=true)
     */
    private $lastname9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primaryemailupdated9", type="string", nullable=true)
     */
    private $primaryemailupdated9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workphone9", type="string", nullable=true)
     */
    private $workphone9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_ggs_id", type="string", nullable=true)
     */
    private $dcGgsId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_siren", type="string", nullable=true)
     */
    private $dcSiren;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_effectif_total", type="string", nullable=true)
     */
    private $dcEffectifTotal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_code_naf", type="string", nullable=true)
     */
    private $dcCodeNaf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_naf_label", type="string", nullable=true)
     */
    private $dcNafLabel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_score", type="string", nullable=true)
     */
    private $dcScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_note_creditsafe", type="string", nullable=true)
     */
    private $dcNoteCreditsafe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_limite_credit", type="string", nullable=true)
     */
    private $dcLimiteCredit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_international_score", type="string", nullable=true)
     */
    private $dcInternationalScore;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_creation_date_etp", type="string", nullable=true)
     */
    private $dcCreationDateEtp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_forme_juridique", type="string", nullable=true)
     */
    private $dcFormeJuridique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_vat", type="string", nullable=true)
     */
    private $dcVat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_siret_siege", type="string", nullable=true)
     */
    private $dcSiretSiege;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_siren_maison_mere", type="string", nullable=true)
     */
    private $dcSirenMaisonMere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_is_active", type="string", nullable=true)
     */
    private $dcIsActive;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_siret", type="string", nullable=true)
     */
    private $dcSiret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_safe_number", type="string", nullable=true)
     */
    private $dcSafeNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_raison_sociale_1", type="string", nullable=true)
     */
    private $dcRaisonSociale1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_raison_sociale_2", type="string", nullable=true)
     */
    private $dcRaisonSociale2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_enseigne", type="string", nullable=true)
     */
    private $dcEnseigne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sigle", type="string", nullable=true)
     */
    private $dcSigle;

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
     * @ORM\Column(name="dc_postcode", type="string", nullable=true)
     */
    private $dcPostcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_city", type="string", nullable=true)
     */
    private $dcCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_bp_cedex", type="string", nullable=true)
     */
    private $dcBpCedex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_new_region", type="string", nullable=true)
     */
    private $dcNewRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_statut", type="string", nullable=true)
     */
    private $dcStatut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_statut_libelle", type="string", nullable=true)
     */
    private $dcStatutLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_naf_etab", type="string", nullable=true)
     */
    private $dcNafEtab;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_naf_libelle_etab", type="string", nullable=true)
     */
    private $dcNafLibelleEtab;

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
     * @ORM\Column(name="dc_effectif_site", type="string", nullable=true)
     */
    private $dcEffectifSite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_creation_date", type="string", nullable=true)
     */
    private $dcCreationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_civilite", type="string", nullable=true)
     */
    private $dcCivilite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_nom", type="string", nullable=true)
     */
    private $dcNom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_prenom", type="string", nullable=true)
     */
    private $dcPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_date_naissance", type="string", nullable=true)
     */
    private $dcDateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_lieu_naissance", type="string", nullable=true)
     */
    private $dcLieuNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_code_fonction", type="string", nullable=true)
     */
    private $dcCodeFonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_libelle_fonction", type="string", nullable=true)
     */
    private $dcLibelleFonction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_chiffre_bands", type="string", nullable=true)
     */
    private $dcChiffreBands;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_date_bilan", type="string", nullable=true)
     */
    private $dcDateBilan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_mois_bilan", type="string", nullable=true)
     */
    private $dcMoisBilan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_effectif", type="string", nullable=true)
     */
    private $dcEffectif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_cap_souscrit_non_appele", type="string", nullable=true)
     */
    private $dcCapSouscritNonAppele;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_actif_immob_net", type="string", nullable=true)
     */
    private $dcActifImmobNet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_immob_incorp", type="string", nullable=true)
     */
    private $dcImmobIncorp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_immob_corp", type="string", nullable=true)
     */
    private $dcImmobCorp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_immobs_fin", type="string", nullable=true)
     */
    private $dcImmobsFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_actif_net_circulant", type="string", nullable=true)
     */
    private $dcActifNetCirculant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_stocks", type="string", nullable=true)
     */
    private $dcStocks;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_avances_et_acomptes_verses", type="string", nullable=true)
     */
    private $dcAvancesEtAcomptesVerses;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_creances", type="string", nullable=true)
     */
    private $dcCreances;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_placements_disponibilites", type="string", nullable=true)
     */
    private $dcPlacementsDisponibilites;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_charges_const_davance", type="string", nullable=true)
     */
    private $dcChargesConstDavance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_comptes_regul_actif", type="string", nullable=true)
     */
    private $dcComptesRegulActif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_actif", type="string", nullable=true)
     */
    private $dcTotalActif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_capitaux_propres", type="string", nullable=true)
     */
    private $dcCapitauxPropres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_dont_capital_social", type="string", nullable=true)
     */
    private $dcDontCapitalSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_autres_fonds_propres", type="string", nullable=true)
     */
    private $dcAutresFondsPropres;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_prov_risques_et_charges", type="string", nullable=true)
     */
    private $dcProvRisquesEtCharges;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_dettes", type="string", nullable=true)
     */
    private $dcDettes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_fin", type="string", nullable=true)
     */
    private $dcFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_avances_et_acompt_recus", type="string", nullable=true)
     */
    private $dcAvancesEtAcomptRecus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_fournisseurs", type="string", nullable=true)
     */
    private $dcFournisseurs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_fiscales_et_sociales", type="string", nullable=true)
     */
    private $dcFiscalesEtSociales;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_autres_dettes", type="string", nullable=true)
     */
    private $dcAutresDettes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_comptes_regul_passif", type="string", nullable=true)
     */
    private $dcComptesRegulPassif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_total_passif", type="string", nullable=true)
     */
    private $dcTotalPassif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_produits_dexploit", type="string", nullable=true)
     */
    private $dcProduitsDexploit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_chiffre_daffaires_net", type="string", nullable=true)
     */
    private $dcChiffreDaffairesNet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_dont_chiffre_daffaires_exp", type="string", nullable=true)
     */
    private $dcDontChiffreDaffairesExp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_charges_dexploit", type="string", nullable=true)
     */
    private $dcChargesDexploit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_resultat_dexploit", type="string", nullable=true)
     */
    private $dcResultatDexploit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_produits_fin", type="string", nullable=true)
     */
    private $dcProduitsFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_charges_fin", type="string", nullable=true)
     */
    private $dcChargesFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_resultats_fin", type="string", nullable=true)
     */
    private $dcResultatsFin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_result_courant_av_impots", type="string", nullable=true)
     */
    private $dcResultCourantAvImpots;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_produits_except", type="string", nullable=true)
     */
    private $dcProduitsExcept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_charges_except", type="string", nullable=true)
     */
    private $dcChargesExcept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_resultat_except", type="string", nullable=true)
     */
    private $dcResultatExcept;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_resultat_net", type="string", nullable=true)
     */
    private $dcResultatNet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sig_marge_comme", type="string", nullable=true)
     */
    private $dcSigMargeComme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sig_valeur_ajoutee", type="string", nullable=true)
     */
    private $dcSigValeurAjoutee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dc_sig_ebe", type="string", nullable=true)
     */
    private $dcSigEbe;

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

    public function getAccountidUi10(): ?string
    {
        return $this->accountidUi10;
    }

    public function setAccountidUi10(?string $accountidUi10): self
    {
        $this->accountidUi10 = $accountidUi10;

        return $this;
    }

    public function getCustomernumber9(): ?string
    {
        return $this->customernumber9;
    }

    public function setCustomernumber9(?string $customernumber9): self
    {
        $this->customernumber9 = $customernumber9;

        return $this;
    }

    public function getAccountname9(): ?string
    {
        return $this->accountname9;
    }

    public function setAccountname9(?string $accountname9): self
    {
        $this->accountname9 = $accountname9;

        return $this;
    }

    public function getRegistrationnumber9(): ?string
    {
        return $this->registrationnumber9;
    }

    public function setRegistrationnumber9(?string $registrationnumber9): self
    {
        $this->registrationnumber9 = $registrationnumber9;

        return $this;
    }

    public function getBillingcountry9(): ?string
    {
        return $this->billingcountry9;
    }

    public function setBillingcountry9(?string $billingcountry9): self
    {
        $this->billingcountry9 = $billingcountry9;

        return $this;
    }

    public function getBillingstateprovince9(): ?string
    {
        return $this->billingstateprovince9;
    }

    public function setBillingstateprovince9(?string $billingstateprovince9): self
    {
        $this->billingstateprovince9 = $billingstateprovince9;

        return $this;
    }

    public function getBillingcity9(): ?string
    {
        return $this->billingcity9;
    }

    public function setBillingcity9(?string $billingcity9): self
    {
        $this->billingcity9 = $billingcity9;

        return $this;
    }

    public function getBillingstreet9(): ?string
    {
        return $this->billingstreet9;
    }

    public function setBillingstreet9(?string $billingstreet9): self
    {
        $this->billingstreet9 = $billingstreet9;

        return $this;
    }

    public function getBillingzippostalcode10(): ?string
    {
        return $this->billingzippostalcode10;
    }

    public function setBillingzippostalcode10(?string $billingzippostalcode10): self
    {
        $this->billingzippostalcode10 = $billingzippostalcode10;

        return $this;
    }

    public function getVatnumber9(): ?string
    {
        return $this->vatnumber9;
    }

    public function setVatnumber9(?string $vatnumber9): self
    {
        $this->vatnumber9 = $vatnumber9;

        return $this;
    }

    public function getAccountphone9(): ?string
    {
        return $this->accountphone9;
    }

    public function setAccountphone9(?string $accountphone9): self
    {
        $this->accountphone9 = $accountphone9;

        return $this;
    }

    public function getFirstname9(): ?string
    {
        return $this->firstname9;
    }

    public function setFirstname9(?string $firstname9): self
    {
        $this->firstname9 = $firstname9;

        return $this;
    }

    public function getMiddlename9(): ?string
    {
        return $this->middlename9;
    }

    public function setMiddlename9(?string $middlename9): self
    {
        $this->middlename9 = $middlename9;

        return $this;
    }

    public function getLastname9(): ?string
    {
        return $this->lastname9;
    }

    public function setLastname9(?string $lastname9): self
    {
        $this->lastname9 = $lastname9;

        return $this;
    }

    public function getPrimaryemailupdated9(): ?string
    {
        return $this->primaryemailupdated9;
    }

    public function setPrimaryemailupdated9(?string $primaryemailupdated9): self
    {
        $this->primaryemailupdated9 = $primaryemailupdated9;

        return $this;
    }

    public function getWorkphone9(): ?string
    {
        return $this->workphone9;
    }

    public function setWorkphone9(?string $workphone9): self
    {
        $this->workphone9 = $workphone9;

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

    public function getDcSiren(): ?string
    {
        return $this->dcSiren;
    }

    public function setDcSiren(?string $dcSiren): self
    {
        $this->dcSiren = $dcSiren;

        return $this;
    }

    public function getDcEffectifTotal(): ?string
    {
        return $this->dcEffectifTotal;
    }

    public function setDcEffectifTotal(?string $dcEffectifTotal): self
    {
        $this->dcEffectifTotal = $dcEffectifTotal;

        return $this;
    }

    public function getDcCodeNaf(): ?string
    {
        return $this->dcCodeNaf;
    }

    public function setDcCodeNaf(?string $dcCodeNaf): self
    {
        $this->dcCodeNaf = $dcCodeNaf;

        return $this;
    }

    public function getDcNafLabel(): ?string
    {
        return $this->dcNafLabel;
    }

    public function setDcNafLabel(?string $dcNafLabel): self
    {
        $this->dcNafLabel = $dcNafLabel;

        return $this;
    }

    public function getDcScore(): ?string
    {
        return $this->dcScore;
    }

    public function setDcScore(?string $dcScore): self
    {
        $this->dcScore = $dcScore;

        return $this;
    }

    public function getDcNoteCreditsafe(): ?string
    {
        return $this->dcNoteCreditsafe;
    }

    public function setDcNoteCreditsafe(?string $dcNoteCreditsafe): self
    {
        $this->dcNoteCreditsafe = $dcNoteCreditsafe;

        return $this;
    }

    public function getDcLimiteCredit(): ?string
    {
        return $this->dcLimiteCredit;
    }

    public function setDcLimiteCredit(?string $dcLimiteCredit): self
    {
        $this->dcLimiteCredit = $dcLimiteCredit;

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

    public function getDcCreationDateEtp(): ?string
    {
        return $this->dcCreationDateEtp;
    }

    public function setDcCreationDateEtp(?string $dcCreationDateEtp): self
    {
        $this->dcCreationDateEtp = $dcCreationDateEtp;

        return $this;
    }

    public function getDcFormeJuridique(): ?string
    {
        return $this->dcFormeJuridique;
    }

    public function setDcFormeJuridique(?string $dcFormeJuridique): self
    {
        $this->dcFormeJuridique = $dcFormeJuridique;

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

    public function getDcSiretSiege(): ?string
    {
        return $this->dcSiretSiege;
    }

    public function setDcSiretSiege(?string $dcSiretSiege): self
    {
        $this->dcSiretSiege = $dcSiretSiege;

        return $this;
    }

    public function getDcSirenMaisonMere(): ?string
    {
        return $this->dcSirenMaisonMere;
    }

    public function setDcSirenMaisonMere(?string $dcSirenMaisonMere): self
    {
        $this->dcSirenMaisonMere = $dcSirenMaisonMere;

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

    public function getDcSiret(): ?string
    {
        return $this->dcSiret;
    }

    public function setDcSiret(?string $dcSiret): self
    {
        $this->dcSiret = $dcSiret;

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

    public function getDcRaisonSociale1(): ?string
    {
        return $this->dcRaisonSociale1;
    }

    public function setDcRaisonSociale1(?string $dcRaisonSociale1): self
    {
        $this->dcRaisonSociale1 = $dcRaisonSociale1;

        return $this;
    }

    public function getDcRaisonSociale2(): ?string
    {
        return $this->dcRaisonSociale2;
    }

    public function setDcRaisonSociale2(?string $dcRaisonSociale2): self
    {
        $this->dcRaisonSociale2 = $dcRaisonSociale2;

        return $this;
    }

    public function getDcEnseigne(): ?string
    {
        return $this->dcEnseigne;
    }

    public function setDcEnseigne(?string $dcEnseigne): self
    {
        $this->dcEnseigne = $dcEnseigne;

        return $this;
    }

    public function getDcSigle(): ?string
    {
        return $this->dcSigle;
    }

    public function setDcSigle(?string $dcSigle): self
    {
        $this->dcSigle = $dcSigle;

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

    public function getDcPostcode(): ?string
    {
        return $this->dcPostcode;
    }

    public function setDcPostcode(?string $dcPostcode): self
    {
        $this->dcPostcode = $dcPostcode;

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

    public function getDcBpCedex(): ?string
    {
        return $this->dcBpCedex;
    }

    public function setDcBpCedex(?string $dcBpCedex): self
    {
        $this->dcBpCedex = $dcBpCedex;

        return $this;
    }

    public function getDcNewRegion(): ?string
    {
        return $this->dcNewRegion;
    }

    public function setDcNewRegion(?string $dcNewRegion): self
    {
        $this->dcNewRegion = $dcNewRegion;

        return $this;
    }

    public function getDcStatut(): ?string
    {
        return $this->dcStatut;
    }

    public function setDcStatut(?string $dcStatut): self
    {
        $this->dcStatut = $dcStatut;

        return $this;
    }

    public function getDcStatutLibelle(): ?string
    {
        return $this->dcStatutLibelle;
    }

    public function setDcStatutLibelle(?string $dcStatutLibelle): self
    {
        $this->dcStatutLibelle = $dcStatutLibelle;

        return $this;
    }

    public function getDcNafEtab(): ?string
    {
        return $this->dcNafEtab;
    }

    public function setDcNafEtab(?string $dcNafEtab): self
    {
        $this->dcNafEtab = $dcNafEtab;

        return $this;
    }

    public function getDcNafLibelleEtab(): ?string
    {
        return $this->dcNafLibelleEtab;
    }

    public function setDcNafLibelleEtab(?string $dcNafLibelleEtab): self
    {
        $this->dcNafLibelleEtab = $dcNafLibelleEtab;

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

    public function getDcEffectifSite(): ?string
    {
        return $this->dcEffectifSite;
    }

    public function setDcEffectifSite(?string $dcEffectifSite): self
    {
        $this->dcEffectifSite = $dcEffectifSite;

        return $this;
    }

    public function getDcCreationDate(): ?string
    {
        return $this->dcCreationDate;
    }

    public function setDcCreationDate(?string $dcCreationDate): self
    {
        $this->dcCreationDate = $dcCreationDate;

        return $this;
    }

    public function getDcCivilite(): ?string
    {
        return $this->dcCivilite;
    }

    public function setDcCivilite(?string $dcCivilite): self
    {
        $this->dcCivilite = $dcCivilite;

        return $this;
    }

    public function getDcNom(): ?string
    {
        return $this->dcNom;
    }

    public function setDcNom(?string $dcNom): self
    {
        $this->dcNom = $dcNom;

        return $this;
    }

    public function getDcPrenom(): ?string
    {
        return $this->dcPrenom;
    }

    public function setDcPrenom(?string $dcPrenom): self
    {
        $this->dcPrenom = $dcPrenom;

        return $this;
    }

    public function getDcDateNaissance(): ?string
    {
        return $this->dcDateNaissance;
    }

    public function setDcDateNaissance(?string $dcDateNaissance): self
    {
        $this->dcDateNaissance = $dcDateNaissance;

        return $this;
    }

    public function getDcLieuNaissance(): ?string
    {
        return $this->dcLieuNaissance;
    }

    public function setDcLieuNaissance(?string $dcLieuNaissance): self
    {
        $this->dcLieuNaissance = $dcLieuNaissance;

        return $this;
    }

    public function getDcCodeFonction(): ?string
    {
        return $this->dcCodeFonction;
    }

    public function setDcCodeFonction(?string $dcCodeFonction): self
    {
        $this->dcCodeFonction = $dcCodeFonction;

        return $this;
    }

    public function getDcLibelleFonction(): ?string
    {
        return $this->dcLibelleFonction;
    }

    public function setDcLibelleFonction(?string $dcLibelleFonction): self
    {
        $this->dcLibelleFonction = $dcLibelleFonction;

        return $this;
    }

    public function getDcChiffreBands(): ?string
    {
        return $this->dcChiffreBands;
    }

    public function setDcChiffreBands(?string $dcChiffreBands): self
    {
        $this->dcChiffreBands = $dcChiffreBands;

        return $this;
    }

    public function getDcDateBilan(): ?string
    {
        return $this->dcDateBilan;
    }

    public function setDcDateBilan(?string $dcDateBilan): self
    {
        $this->dcDateBilan = $dcDateBilan;

        return $this;
    }

    public function getDcMoisBilan(): ?string
    {
        return $this->dcMoisBilan;
    }

    public function setDcMoisBilan(?string $dcMoisBilan): self
    {
        $this->dcMoisBilan = $dcMoisBilan;

        return $this;
    }

    public function getDcEffectif(): ?string
    {
        return $this->dcEffectif;
    }

    public function setDcEffectif(?string $dcEffectif): self
    {
        $this->dcEffectif = $dcEffectif;

        return $this;
    }

    public function getDcCapSouscritNonAppele(): ?string
    {
        return $this->dcCapSouscritNonAppele;
    }

    public function setDcCapSouscritNonAppele(?string $dcCapSouscritNonAppele): self
    {
        $this->dcCapSouscritNonAppele = $dcCapSouscritNonAppele;

        return $this;
    }

    public function getDcActifImmobNet(): ?string
    {
        return $this->dcActifImmobNet;
    }

    public function setDcActifImmobNet(?string $dcActifImmobNet): self
    {
        $this->dcActifImmobNet = $dcActifImmobNet;

        return $this;
    }

    public function getDcImmobIncorp(): ?string
    {
        return $this->dcImmobIncorp;
    }

    public function setDcImmobIncorp(?string $dcImmobIncorp): self
    {
        $this->dcImmobIncorp = $dcImmobIncorp;

        return $this;
    }

    public function getDcImmobCorp(): ?string
    {
        return $this->dcImmobCorp;
    }

    public function setDcImmobCorp(?string $dcImmobCorp): self
    {
        $this->dcImmobCorp = $dcImmobCorp;

        return $this;
    }

    public function getDcImmobsFin(): ?string
    {
        return $this->dcImmobsFin;
    }

    public function setDcImmobsFin(?string $dcImmobsFin): self
    {
        $this->dcImmobsFin = $dcImmobsFin;

        return $this;
    }

    public function getDcActifNetCirculant(): ?string
    {
        return $this->dcActifNetCirculant;
    }

    public function setDcActifNetCirculant(?string $dcActifNetCirculant): self
    {
        $this->dcActifNetCirculant = $dcActifNetCirculant;

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

    public function getDcAvancesEtAcomptesVerses(): ?string
    {
        return $this->dcAvancesEtAcomptesVerses;
    }

    public function setDcAvancesEtAcomptesVerses(?string $dcAvancesEtAcomptesVerses): self
    {
        $this->dcAvancesEtAcomptesVerses = $dcAvancesEtAcomptesVerses;

        return $this;
    }

    public function getDcCreances(): ?string
    {
        return $this->dcCreances;
    }

    public function setDcCreances(?string $dcCreances): self
    {
        $this->dcCreances = $dcCreances;

        return $this;
    }

    public function getDcPlacementsDisponibilites(): ?string
    {
        return $this->dcPlacementsDisponibilites;
    }

    public function setDcPlacementsDisponibilites(?string $dcPlacementsDisponibilites): self
    {
        $this->dcPlacementsDisponibilites = $dcPlacementsDisponibilites;

        return $this;
    }

    public function getDcChargesConstDavance(): ?string
    {
        return $this->dcChargesConstDavance;
    }

    public function setDcChargesConstDavance(?string $dcChargesConstDavance): self
    {
        $this->dcChargesConstDavance = $dcChargesConstDavance;

        return $this;
    }

    public function getDcComptesRegulActif(): ?string
    {
        return $this->dcComptesRegulActif;
    }

    public function setDcComptesRegulActif(?string $dcComptesRegulActif): self
    {
        $this->dcComptesRegulActif = $dcComptesRegulActif;

        return $this;
    }

    public function getDcTotalActif(): ?string
    {
        return $this->dcTotalActif;
    }

    public function setDcTotalActif(?string $dcTotalActif): self
    {
        $this->dcTotalActif = $dcTotalActif;

        return $this;
    }

    public function getDcCapitauxPropres(): ?string
    {
        return $this->dcCapitauxPropres;
    }

    public function setDcCapitauxPropres(?string $dcCapitauxPropres): self
    {
        $this->dcCapitauxPropres = $dcCapitauxPropres;

        return $this;
    }

    public function getDcDontCapitalSocial(): ?string
    {
        return $this->dcDontCapitalSocial;
    }

    public function setDcDontCapitalSocial(?string $dcDontCapitalSocial): self
    {
        $this->dcDontCapitalSocial = $dcDontCapitalSocial;

        return $this;
    }

    public function getDcAutresFondsPropres(): ?string
    {
        return $this->dcAutresFondsPropres;
    }

    public function setDcAutresFondsPropres(?string $dcAutresFondsPropres): self
    {
        $this->dcAutresFondsPropres = $dcAutresFondsPropres;

        return $this;
    }

    public function getDcProvRisquesEtCharges(): ?string
    {
        return $this->dcProvRisquesEtCharges;
    }

    public function setDcProvRisquesEtCharges(?string $dcProvRisquesEtCharges): self
    {
        $this->dcProvRisquesEtCharges = $dcProvRisquesEtCharges;

        return $this;
    }

    public function getDcDettes(): ?string
    {
        return $this->dcDettes;
    }

    public function setDcDettes(?string $dcDettes): self
    {
        $this->dcDettes = $dcDettes;

        return $this;
    }

    public function getDcFin(): ?string
    {
        return $this->dcFin;
    }

    public function setDcFin(?string $dcFin): self
    {
        $this->dcFin = $dcFin;

        return $this;
    }

    public function getDcAvancesEtAcomptRecus(): ?string
    {
        return $this->dcAvancesEtAcomptRecus;
    }

    public function setDcAvancesEtAcomptRecus(?string $dcAvancesEtAcomptRecus): self
    {
        $this->dcAvancesEtAcomptRecus = $dcAvancesEtAcomptRecus;

        return $this;
    }

    public function getDcFournisseurs(): ?string
    {
        return $this->dcFournisseurs;
    }

    public function setDcFournisseurs(?string $dcFournisseurs): self
    {
        $this->dcFournisseurs = $dcFournisseurs;

        return $this;
    }

    public function getDcFiscalesEtSociales(): ?string
    {
        return $this->dcFiscalesEtSociales;
    }

    public function setDcFiscalesEtSociales(?string $dcFiscalesEtSociales): self
    {
        $this->dcFiscalesEtSociales = $dcFiscalesEtSociales;

        return $this;
    }

    public function getDcAutresDettes(): ?string
    {
        return $this->dcAutresDettes;
    }

    public function setDcAutresDettes(?string $dcAutresDettes): self
    {
        $this->dcAutresDettes = $dcAutresDettes;

        return $this;
    }

    public function getDcComptesRegulPassif(): ?string
    {
        return $this->dcComptesRegulPassif;
    }

    public function setDcComptesRegulPassif(?string $dcComptesRegulPassif): self
    {
        $this->dcComptesRegulPassif = $dcComptesRegulPassif;

        return $this;
    }

    public function getDcTotalPassif(): ?string
    {
        return $this->dcTotalPassif;
    }

    public function setDcTotalPassif(?string $dcTotalPassif): self
    {
        $this->dcTotalPassif = $dcTotalPassif;

        return $this;
    }

    public function getDcProduitsDexploit(): ?string
    {
        return $this->dcProduitsDexploit;
    }

    public function setDcProduitsDexploit(?string $dcProduitsDexploit): self
    {
        $this->dcProduitsDexploit = $dcProduitsDexploit;

        return $this;
    }

    public function getDcChiffreDaffairesNet(): ?string
    {
        return $this->dcChiffreDaffairesNet;
    }

    public function setDcChiffreDaffairesNet(?string $dcChiffreDaffairesNet): self
    {
        $this->dcChiffreDaffairesNet = $dcChiffreDaffairesNet;

        return $this;
    }

    public function getDcDontChiffreDaffairesExp(): ?string
    {
        return $this->dcDontChiffreDaffairesExp;
    }

    public function setDcDontChiffreDaffairesExp(?string $dcDontChiffreDaffairesExp): self
    {
        $this->dcDontChiffreDaffairesExp = $dcDontChiffreDaffairesExp;

        return $this;
    }

    public function getDcChargesDexploit(): ?string
    {
        return $this->dcChargesDexploit;
    }

    public function setDcChargesDexploit(?string $dcChargesDexploit): self
    {
        $this->dcChargesDexploit = $dcChargesDexploit;

        return $this;
    }

    public function getDcResultatDexploit(): ?string
    {
        return $this->dcResultatDexploit;
    }

    public function setDcResultatDexploit(?string $dcResultatDexploit): self
    {
        $this->dcResultatDexploit = $dcResultatDexploit;

        return $this;
    }

    public function getDcProduitsFin(): ?string
    {
        return $this->dcProduitsFin;
    }

    public function setDcProduitsFin(?string $dcProduitsFin): self
    {
        $this->dcProduitsFin = $dcProduitsFin;

        return $this;
    }

    public function getDcChargesFin(): ?string
    {
        return $this->dcChargesFin;
    }

    public function setDcChargesFin(?string $dcChargesFin): self
    {
        $this->dcChargesFin = $dcChargesFin;

        return $this;
    }

    public function getDcResultatsFin(): ?string
    {
        return $this->dcResultatsFin;
    }

    public function setDcResultatsFin(?string $dcResultatsFin): self
    {
        $this->dcResultatsFin = $dcResultatsFin;

        return $this;
    }

    public function getDcResultCourantAvImpots(): ?string
    {
        return $this->dcResultCourantAvImpots;
    }

    public function setDcResultCourantAvImpots(?string $dcResultCourantAvImpots): self
    {
        $this->dcResultCourantAvImpots = $dcResultCourantAvImpots;

        return $this;
    }

    public function getDcProduitsExcept(): ?string
    {
        return $this->dcProduitsExcept;
    }

    public function setDcProduitsExcept(?string $dcProduitsExcept): self
    {
        $this->dcProduitsExcept = $dcProduitsExcept;

        return $this;
    }

    public function getDcChargesExcept(): ?string
    {
        return $this->dcChargesExcept;
    }

    public function setDcChargesExcept(?string $dcChargesExcept): self
    {
        $this->dcChargesExcept = $dcChargesExcept;

        return $this;
    }

    public function getDcResultatExcept(): ?string
    {
        return $this->dcResultatExcept;
    }

    public function setDcResultatExcept(?string $dcResultatExcept): self
    {
        $this->dcResultatExcept = $dcResultatExcept;

        return $this;
    }

    public function getDcResultatNet(): ?string
    {
        return $this->dcResultatNet;
    }

    public function setDcResultatNet(?string $dcResultatNet): self
    {
        $this->dcResultatNet = $dcResultatNet;

        return $this;
    }

    public function getDcSigMargeComme(): ?string
    {
        return $this->dcSigMargeComme;
    }

    public function setDcSigMargeComme(?string $dcSigMargeComme): self
    {
        $this->dcSigMargeComme = $dcSigMargeComme;

        return $this;
    }

    public function getDcSigValeurAjoutee(): ?string
    {
        return $this->dcSigValeurAjoutee;
    }

    public function setDcSigValeurAjoutee(?string $dcSigValeurAjoutee): self
    {
        $this->dcSigValeurAjoutee = $dcSigValeurAjoutee;

        return $this;
    }

    public function getDcSigEbe(): ?string
    {
        return $this->dcSigEbe;
    }

    public function setDcSigEbe(?string $dcSigEbe): self
    {
        $this->dcSigEbe = $dcSigEbe;

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
