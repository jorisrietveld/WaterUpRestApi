<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 31-05-2017 21:19
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="Pot")
 * @Gedmo\SoftDeleteable(fieldName="dateRemoved", timeAware=false)
 */
class Pot
{
    protected $id;
    protected $potMacAddress;
    protected $potUniqueHash;
    protected $registrationDate;
    protected $activationDate;
    protected $dateRemoved;
}