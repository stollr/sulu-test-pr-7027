<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230728135034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ca_categories ADD my_property VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE co_accounts ADD my_property VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE co_contacts ADD my_property VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE me_media ADD my_property VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE se_roles ADD my_property VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE se_users ADD my_property VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE ta_tags ADD my_property VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ca_categories DROP my_property');
        $this->addSql('ALTER TABLE se_users DROP my_property');
        $this->addSql('ALTER TABLE me_media DROP my_property');
        $this->addSql('ALTER TABLE se_roles DROP my_property');
        $this->addSql('ALTER TABLE co_accounts DROP my_property');
        $this->addSql('ALTER TABLE ta_tags DROP my_property');
        $this->addSql('ALTER TABLE co_contacts DROP my_property');
    }
}
