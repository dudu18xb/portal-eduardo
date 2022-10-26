<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipe Entity
 *
 * @property int $id
 * @property bool $status
 * @property string $nome
 * @property string $imagem
 * @property string $cargo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Equipe extends Entity
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
        'nome' => true,
        'status' => true,
        'imagem' => true,
        'cargo' => true,
        'created' => true,
        'modified' => true
    ];
}
