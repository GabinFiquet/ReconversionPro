<?php

namespace PF\AgendaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeSlot
 *
 * @ORM\Table(name="time_slot")
 * @ORM\Entity(repositoryClass="PF\AgendaBundle\Repository\TimeSlotRepository")
 */
class TimeSlot
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="PF\AgendaBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=false, onDelete="CASCADE"))
	 */
	private $conseille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set conseille
     *
     * @param string $conseille
     *
     * @return TimeSlot
     */
    public function setConseille($conseille)
    {
        $this->conseille = $conseille;

        return $this;
    }

    /**
     * Get conseille
     *
     * @return string
     */
    public function getConseille()
    {
        return $this->conseille;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return TimeSlot
     */
    public function setDate($date)
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
}

