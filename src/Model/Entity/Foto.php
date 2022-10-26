<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Foto Entity
 *
 * @property int $id
 * @property bool $status
 * @property string $descricao
 * @property string $imagem
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $blog_id
 * @property int $about_id
 *
 * @property \App\Model\Entity\Blog $blog
 * @property \App\Model\Entity\About $about
 */
class Foto extends Entity
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
        'descricao' => true,
        'imagem' => true,
        'created' => true,
        'modified' => true,
        'blog_id' => true,
        'about_id' => true,
        'blogs' => true,
        'about' => true
    ];
}
