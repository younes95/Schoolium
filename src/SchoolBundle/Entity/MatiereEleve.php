<?php

namespace SchoolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere_Eleve
 * @ORM\Entity
 * @ORM\Table(name="matiere_eleve")
 * @ORM\HasLifecycleCallbacks()
 */
class MatiereEleve
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer $id
     */
    protected $id;


    /**
     * @ORM\ManyToOne(targetEntity="Matiere", inversedBy="notes")
     * @ORM\JoinColumn(name="matiere_id", referencedColumnName="id")
     * */
    protected $matiere;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Eleve", inversedBy="notes")
     * @ORM\JoinColumn(name="eleve_id", referencedColumnName="id")
     * */
    protected $eleve;

    /**
     * @ORM\ManyToOne(targetEntity="Evaluation", inversedBy="notes")
     * @ORM\JoinColumn(name="evaluation_id", referencedColumnName="id")
     * */
    protected $evaluation;

    /**
     * @var float $note
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;
   
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date",nullable=true)
     */
    private $date;

    /**
     * @var text $remarque
     *
     * @ORM\Column(name="remarque", type="text")
     */
    private $remarque;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return MatiereEleve
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set matiere
     *
     * @param \SchoolBundle\Entity\Matiere $matiere
     *
     * @return MatiereEleve
     */
    public function setMatiere(\SchoolBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \SchoolBundle\Entity\Matiere
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set eleve
     *
     * @param \UserBundle\Entity\Eleve $eleve
     *
     * @return MatiereEleve
     */
    public function setEleve(\UserBundle\Entity\Eleve $eleve = null)
    {
        $this->eleve = $eleve;
    
        return $this;
    }

    /**
     * Get eleve
     *
     * @return \UserBundle\Entity\Eleve
     */
    public function getEleve()
    {
        return $this->eleve;
    }

    /**
     * Set evaluation
     *
     * @param \SchoolBundle\Entity\Evaluation $evaluation
     *
     * @return MatiereEleve
     */
    public function setEvaluation(\SchoolBundle\Entity\Evaluation $evaluation = null)
    {
        $this->evaluation = $evaluation;
    
        return $this;
    }

    /**
     * Get evaluation
     *
     * @return \SchoolBundle\Entity\Evaluation
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MatiereEleve
     */
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     *
     * @return MatiereEleve
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }
}
