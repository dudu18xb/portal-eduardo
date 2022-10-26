<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Config Entity
 *
 * @property int $id
 * @property bool|null $manutencao
 * @property string|null $nome_site
 * @property string|null $logo_site
 * @property string|null $favicon_site
 * @property string|null $codigo_google_analytics
 * @property string|null $codigo_facebook_pixel
 * @property string|null $site_key
 * @property string|null $secrete_key
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $telefone
 * @property string|null $celular
 * @property string|null $endereco
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Config extends Entity
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
        'manutencao' => true,
        'nome_site' => true,
        'logo_site' => true,
        'favicon_site' => true,
        'codigo_google_analytics' => true,
        'codigo_facebook_pixel' => true,
        'site_key' => true,
        'secrete_key' => true,
        'facebook' => true,
        'instagram' => true,
        'twitter' => true,
        'telefone' => true,
        'celular' => true,
        'endereco' => true,
        'created' => true,
        'modified' => true
    ];
}
