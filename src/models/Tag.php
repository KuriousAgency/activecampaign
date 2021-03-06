<?php
/**
 * ActiveCampaign plugin for Craft CMS 3.x
 *
 * Active Campaign plugin for Craft CMS
 *
 * @link      https://kurious.agency
 * @copyright Copyright (c) 2018 Kurious Agency
 */

namespace kuriousagency\activecampaign\models;

use kuriousagency\activecampaign\ActiveCampaign;

use Craft;
use craft\base\Model;

/**
 * @author    Kurious Agency
 * @package   ActiveCampaign
 * @since     1.0.0
 */
class Tag extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
	public $id;

	public $name;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
        ];
    }
}
