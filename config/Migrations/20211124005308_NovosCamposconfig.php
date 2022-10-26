<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class NovosCamposconfig extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $configs = $this->table('configs');
        $configs
            ->addColumn('manutencao', 'boolean', [
                'null' => true,
            ])
            ->addColumn('nome_site', 'string', [
                'null' => true,
            ])
            ->addColumn('logo_site', 'string', [
                'null' => true,
            ])
            ->addColumn('favicon_site', 'string', [
                'null' => true,
            ])
            ->addColumn('codigo_google_analytics', 'text', [
                'null' => true,
                'limit' => MysqlAdapter::TEXT_LONG,
            ])
            ->addColumn('codigo_facebook_pixel', 'text', [
                'null' => true,
                'limit' => MysqlAdapter::TEXT_LONG,
            ])
            ->addColumn('site_key', 'string', [
                'null' => true,
            ])
            ->addColumn('secrete_key', 'string', [
                'null' => true,
            ]);
        $configs->update();

    }
}
