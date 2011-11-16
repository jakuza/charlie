<?php

namespace Charlie\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="offerta")
 */
class Offerta 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    protected $titolo;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    protected $sede;
    
    /**
     * @ORM\Column(type="float", nullable=false)
     */
    protected $salario;
    
    /**
     * @ORM\Column(type="text", nullable=false)
     */
    protected $descrizione;
    
     

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
     * Set titolo
     *
     * @param string $titolo
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set sede
     *
     * @param string $sede
     */
    public function setSede($sede)
    {
        $this->sede = $sede;
    }

    /**
     * Get sede
     *
     * @return string 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set salario
     *
     * @param float $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * Get salario
     *
     * @return float 
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set descrizione
     *
     * @param text $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    /**
     * Get descrizione
     *
     * @return text 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }
}