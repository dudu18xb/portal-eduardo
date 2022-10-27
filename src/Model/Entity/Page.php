<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Page Entity
 *
 * @property int $id
 * @property int $seo_id
 * @property bool $status
 * @property string $title
 * @property string $type
 * @property string $description
 * @property string $slug
 * @property string $url_custom
 * @property string $image
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $visualization
 *
 * @property \App\Model\Entity\Seo $seo
 * @property \App\Model\Entity\Photo[] $photos
 * @property \App\Model\Entity\Banner[] $banners
 */
class Page extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'seo_id' => true,
        'status' => true,
        'title' => true,
        'type' => true,
        'description' => true,
        'slug' => true,
        'url_custom' => true,
        'image' => true,
        'created' => true,
        'modified' => true,
        'visualization' => true,
        'seo' => true,
        'photos' => true,
        'banners' => true
    ];

    /**
     * @param string $title string do title
     * @return mixed
     */
    protected function _setTitle($title)
    {
        $this->slug = Text::slug(mb_strtolower($title));

        return $title;
    }
}
