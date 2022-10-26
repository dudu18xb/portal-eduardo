<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Backgroundparalax Entity
 *
 * @property int $id
 * @property string $titulo
 * @property bool $status
 * @property string $sub_titulo
 * @property string $texto_botao
 * @property string $url
 * @property string $imagem
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Backgroundparalax extends Entity
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
        'titulo' => true,
        'sub_titulo' => true,
        'texto_botao' => true,
        'url' => true,
        'imagem' => true,
        'status' => true,
        'created' => true,
        'modified' => true
    ];
}
