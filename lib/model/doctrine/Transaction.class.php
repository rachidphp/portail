<?php

/**
 * Transaction
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Transaction extends BaseTransaction
{
    public function __toString()
    {
        return $this->libelle;
    }

    public function noteDeFraisRepr()
    {
        // On est obligé de charger le helper Number pour formatter le montant correctement
        sfApplicationConfiguration::getActive()->loadHelpers('Number');

        return sprintf("%s - %s - %s", $this->moyen_commentaire, $this->libelle, format_currency(abs($this->montant), '€', 'fr_FR'));
    }

    public function getMontantAbsolute()
    {
        return abs($this->getMontant());
    }
}
