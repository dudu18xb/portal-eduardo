<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contato Entity
 *
 * @property int $id
 * @property bool $status
 * @property string $nome
 * @property string $email
 * @property string $assunto
 * @property string $mensagem
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Contato extends Entity
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
        'nome' => true,
        'email' => true,
        'assunto' => true,
        'mensagem' => true,
        'created' => true,
        'modified' => true
    ];
}
