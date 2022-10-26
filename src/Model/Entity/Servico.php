<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servico Entity
 *
 * @property int $id
 * @property int $categoriaservicos_id
 * @property string $titulo
 * @property string $descricao
 * @property string $imagem
 * @property string $icone
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Servico extends Entity
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
        'categoriaservicos_id' => true,
        'titulo' => true,
        'descricao' => true,
        'imagem' => true,
        'icone' => true,
        'created' => true,
        'modified' => true
    ];
}
