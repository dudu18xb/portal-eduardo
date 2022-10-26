<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * About Entity
 *
 * @property int $id
 * @property string $descricao
 * @property string $imagem
 * @property string $bg_topo
 * @property string $missao
 * @property string $visao
 * @property string $valores
 * @property string $bg_visao
 * @property string $bg_missao
 * @property string $bg_valores
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $diastrabalhados
 * @property int $pacientesatendidos
 * @property bool $status
 */
class About extends Entity
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
        'descricao' => true,
        'imagem' => true,
        'missao' => true,
        'visao' => true,
        'valores' => true,
        'bg_visao' => true,
        'bg_missao' => true,
        'bg_valores' => true,
        'created' => true,
        'modified' => true,
        'diastrabalhados' => true,
        'pacientesatendidos' => true,
        'status' => true,
        'bg_topo' => true,
    ];
}
