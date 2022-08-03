<?php

namespace App\Entity;

use App\Repository\BailleursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BailleursRepository::class)
 */
class Bailleurs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secteurIntervation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeFinancement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $partFinancer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maturite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $periodeGrace;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tauxInteret;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $differencielInteret;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fraisGestion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commissionEngagement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commissionService;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commissionInitiale;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commissionArragement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fraisExposition;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commissionAgent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $maturiteLettreCredit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fraisRefLettreCredit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fraisRebours;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $primeAssuranceFraisGarantie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $primeAttenuationRisqueCredit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $frais_lies_mep_lettre_credit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSecteurIntervation(): ?string
    {
        return $this->secteurIntervation;
    }

    public function setSecteurIntervation(string $secteurIntervation): self
    {
        $this->secteurIntervation = $secteurIntervation;

        return $this;
    }

    public function getTypeFinancement(): ?string
    {
        return $this->typeFinancement;
    }

    public function setTypeFinancement(string $typeFinancement): self
    {
        $this->typeFinancement = $typeFinancement;

        return $this;
    }

    public function getPartFinancer(): ?string
    {
        return $this->partFinancer;
    }

    public function setPartFinancer(string $partFinancer): self
    {
        $this->partFinancer = $partFinancer;

        return $this;
    }

    public function getMaturite(): ?string
    {
        return $this->maturite;
    }

    public function setMaturite(string $maturite): self
    {
        $this->maturite = $maturite;

        return $this;
    }

    public function getPeriodeGrace(): ?string
    {
        return $this->periodeGrace;
    }

    public function setPeriodeGrace(?string $periodeGrace): self
    {
        $this->periodeGrace = $periodeGrace;

        return $this;
    }

    public function getTauxInteret(): ?string
    {
        return $this->tauxInteret;
    }

    public function setTauxInteret(string $tauxInteret): self
    {
        $this->tauxInteret = $tauxInteret;

        return $this;
    }

    public function getDifferencielInteret(): ?string
    {
        return $this->differencielInteret;
    }

    public function setDifferencielInteret(?string $differencielInteret): self
    {
        $this->differencielInteret = $differencielInteret;

        return $this;
    }

    public function getFraisGestion(): ?string
    {
        return $this->fraisGestion;
    }

    public function setFraisGestion(?string $fraisGestion): self
    {
        $this->fraisGestion = $fraisGestion;

        return $this;
    }

    public function getCommissionEngagement(): ?string
    {
        return $this->commissionEngagement;
    }

    public function setCommissionEngagement(?string $commissionEngagement): self
    {
        $this->commissionEngagement = $commissionEngagement;

        return $this;
    }

    public function getCommissionService(): ?string
    {
        return $this->commissionService;
    }

    public function setCommissionService(?string $commissionService): self
    {
        $this->commissionService = $commissionService;

        return $this;
    }

    public function getCommissionInitiale(): ?string
    {
        return $this->commissionInitiale;
    }

    public function setCommissionInitiale(?string $commissionInitiale): self
    {
        $this->commissionInitiale = $commissionInitiale;

        return $this;
    }

    public function getCommissionArragement(): ?string
    {
        return $this->commissionArragement;
    }

    public function setCommissionArragement(?string $commissionArragement): self
    {
        $this->commissionArragement = $commissionArragement;

        return $this;
    }

    public function getFraisExposition(): ?string
    {
        return $this->fraisExposition;
    }

    public function setFraisExposition(?string $fraisExposition): self
    {
        $this->fraisExposition = $fraisExposition;

        return $this;
    }

    public function getCommissionAgent(): ?string
    {
        return $this->commissionAgent;
    }

    public function setCommissionAgent(?string $commissionAgent): self
    {
        $this->commissionAgent = $commissionAgent;

        return $this;
    }

    public function getMaturiteLettreCredit(): ?string
    {
        return $this->maturiteLettreCredit;
    }

    public function setMaturiteLettreCredit(?string $maturiteLettreCredit): self
    {
        $this->maturiteLettreCredit = $maturiteLettreCredit;

        return $this;
    }

    public function getFraisRefLettreCredit(): ?string
    {
        return $this->fraisRefLettreCredit;
    }

    public function setFraisRefLettreCredit(?string $fraisRefLettreCredit): self
    {
        $this->fraisRefLettreCredit = $fraisRefLettreCredit;

        return $this;
    }

    public function getFraisRebours(): ?string
    {
        return $this->fraisRebours;
    }

    public function setFraisRebours(?string $fraisRebours): self
    {
        $this->fraisRebours = $fraisRebours;

        return $this;
    }

    public function getPrimeAssuranceFraisGarantie(): ?string
    {
        return $this->primeAssuranceFraisGarantie;
    }

    public function setPrimeAssuranceFraisGarantie(?string $primeAssuranceFraisGarantie): self
    {
        $this->primeAssuranceFraisGarantie = $primeAssuranceFraisGarantie;

        return $this;
    }

    public function getPrimeAttenuationRisqueCredit(): ?string
    {
        return $this->primeAttenuationRisqueCredit;
    }

    public function setPrimeAttenuationRisqueCredit(?string $primeAttenuationRisqueCredit): self
    {
        $this->primeAttenuationRisqueCredit = $primeAttenuationRisqueCredit;

        return $this;
    }

    public function getFraisLiesMepLettreCredit(): ?string
    {
        return $this->frais_lies_mep_lettre_credit;
    }

    public function setFraisLiesMepLettreCredit(?string $frais_lies_mep_lettre_credit): self
    {
        $this->frais_lies_mep_lettre_credit = $frais_lies_mep_lettre_credit;

        return $this;
    }
}
