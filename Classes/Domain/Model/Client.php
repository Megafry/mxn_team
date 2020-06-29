<?php
namespace Mexan\MxnTeam\Domain\Model;


/***
 *
 * This file is part of the "mxn_team" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020
 *
 ***/
/**
 * Client
 */
class Client extends \GeorgRinger\News\Domain\Model\News
{

    /**
     * card
     *
     * @var string
     */
    protected $card = '';

    /**
     * Returns the card
     *
     * @return string $card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Sets the card
     *
     * @param string $card
     * @return void
     */
    public function setCard($card)
    {
        $this->card = $card;
    }
}
