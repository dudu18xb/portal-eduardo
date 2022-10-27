<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Article Entity
 *
 * @property int $id
 * @property int $seo_id
 * @property int $category_id
 * @property int $author_id
 * @property bool $status
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $slug
 * @property string $visualization
 * @property \Cake\I18n\FrozenTime $publication_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $type
 * @property string $url_external
 * @property string $url_text
 *
 * @property \App\Model\Entity\Seo $seo
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Author $author
 * @property \App\Model\Entity\Photo[] $photos
 * @property \App\Model\Entity\Banner[] $banners
 * @property \App\Model\Entity\Tag[] $tags
 */
class Article extends Entity
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
        'category_id' => true,
        'author_id' => true,
        'status' => true,
        'title' => true,
        'description' => true,
        'image' => true,
        'slug' => true,
        'visualization' => true,
        'publication_date' => true,
        'created' => true,
        'modified' => true,
        'type' => true,
        'url_external' => true,
        'url_text' => true,
        'seo' => true,
        'category' => true,
        'author' => true,
        'photos' => true,
        'banners' => true,
        'tags' => true
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
