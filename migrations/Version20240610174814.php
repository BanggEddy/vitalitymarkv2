<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240610174814 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2F1F5A7F6');
        $this->addSql('DROP INDEX IDX_24CC0DF2F1F5A7F6 ON panier');
        $this->addSql('ALTER TABLE panier DROP panier_items_id');
        $this->addSql('ALTER TABLE panier_items ADD idpanier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier_items ADD CONSTRAINT FK_C833C6F089663B89 FOREIGN KEY (idpanier_id) REFERENCES panier (id)');
        $this->addSql('CREATE INDEX IDX_C833C6F089663B89 ON panier_items (idpanier_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier ADD panier_items_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F1F5A7F6 FOREIGN KEY (panier_items_id) REFERENCES panier_items (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF2F1F5A7F6 ON panier (panier_items_id)');
        $this->addSql('ALTER TABLE panier_items DROP FOREIGN KEY FK_C833C6F089663B89');
        $this->addSql('DROP INDEX IDX_C833C6F089663B89 ON panier_items');
        $this->addSql('ALTER TABLE panier_items DROP idpanier_id');
    }
}
