<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banner Entity
 *
 * @property int $id
 * @property bool $status
 * @property string $title
 * @property string $position
 * @property string $image
 * @property string $image_mobile
 * @property string $visualization
 * @property string $title_banner
 * @property string $description_banner
 * @property string $url_youtube
 * @property string $url_page
 * @property string $url_text
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Article[] $articles
 * @property \App\Model\Entity\Page[] $pages
 */
class Banner extends Entity
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
        'status' => true,
        'title' => true,
        'position' => true,
        'image' => true,
        'image_mobile' => true,
        'visualization' => true,
        'title_banner' => true,
        'description_banner' => true,
        'url_youtube' => true,
        'url_page' => true,
        'url_text' => true,
        'created' => true,
        'modified' => true,
        'articles' => true,
        'pages' => true
    ];
}
