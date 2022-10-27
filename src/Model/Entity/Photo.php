<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Photo Entity
 *
 * @property int $id
 * @property int $page_id
 * @property int $article_id
 * @property bool $status
 * @property string $title
 * @property string $image
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Page $page
 * @property \App\Model\Entity\Article $article
 */
class Photo extends Entity
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
        'page_id' => true,
        'article_id' => true,
        'status' => true,
        'title' => true,
        'image' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'page' => true,
        'article' => true
    ];
}
