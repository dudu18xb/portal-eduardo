<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Category Entity
 *
 * @property int $id
 * @property int $seo_id
 * @property bool $status
 * @property string $title
 * @property string $image
 * @property string $slug
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Seo $seo
 * @property \App\Model\Entity\Article[] $articles
 */
class Category extends Entity
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
        'image' => true,
        'slug' => true,
        'created' => true,
        'modified' => true,
        'seo' => true,
        'articles' => true
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
