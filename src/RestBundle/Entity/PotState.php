<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:27
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

use \Doctrine\ORM\Mapping as ORM;
use \Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="PotState")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class PotState
{
    /**
     * This column holds the unique record identification code that is generated by the database upon record creation.
     *
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     */
    protected $potId;

    /**
     * @var
     */
    protected $plantId;

    /**
     * @var
     */
    protected $waterLevel;

    /**
     * @var
     */
    protected $soilMoisture;

    /**
     * @var
     */
    protected $dateMeasurement;

    /**
     * This column holds the timestamp of the date the record was soft deleted. The record will still exist in the
     * database but marked as unactive.
     *
     * @var \DateTime
     * @ORM\Column(name="date_removed", type="datetime", nullable=true)
     */
    protected $dateRemoved;
}
