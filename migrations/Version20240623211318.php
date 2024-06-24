<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240623211318 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, iduser_id INT DEFAULT NULL, subject VARCHAR(255) DEFAULT NULL, object VARCHAR(255) DEFAULT NULL, INDEX IDX_4C62E638786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coupon (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, reduction DOUBLE PRECISION DEFAULT NULL, qty INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coupon_loyalty_card (coupon_id INT NOT NULL, loyalty_card_id INT NOT NULL, INDEX IDX_A27DEC6566C5951B (coupon_id), INDEX IDX_A27DEC65260D7293 (loyalty_card_id), PRIMARY KEY(coupon_id, loyalty_card_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE loyalty_card (id INT AUTO_INCREMENT NOT NULL, iduser_id INT DEFAULT NULL, card_number VARCHAR(255) DEFAULT NULL, card_type VARCHAR(255) DEFAULT NULL, points VARCHAR(255) DEFAULT NULL, personalized_offer VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_EAB8BCBD786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, iduser_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_24CC0DF2786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier_items (id INT AUTO_INCREMENT NOT NULL, idproduct_id INT DEFAULT NULL, idpanier_id INT DEFAULT NULL, quantity INT DEFAULT NULL, INDEX IDX_C833C6F0882D7B60 (idproduct_id), INDEX IDX_C833C6F089663B89 (idpanier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE products (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, category VARCHAR(255) NOT NULL, quantity INT NOT NULL, images VARCHAR(255) DEFAULT NULL, description VARCHAR(255) NOT NULL, price DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo (id INT AUTO_INCREMENT NOT NULL, idproduct_id INT DEFAULT NULL, reduction VARCHAR(255) DEFAULT NULL, date_fin DATE DEFAULT NULL, date_debut DATE DEFAULT NULL, description VARCHAR(255) NOT NULL, priceafterpromo VARCHAR(255) DEFAULT NULL, INDEX IDX_B0139AFB882D7B60 (idproduct_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, name VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, civilite VARCHAR(255) DEFAULT NULL, date_create DATE NOT NULL, deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', expired_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE coupon_loyalty_card ADD CONSTRAINT FK_A27DEC6566C5951B FOREIGN KEY (coupon_id) REFERENCES coupon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coupon_loyalty_card ADD CONSTRAINT FK_A27DEC65260D7293 FOREIGN KEY (loyalty_card_id) REFERENCES loyalty_card (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE loyalty_card ADD CONSTRAINT FK_EAB8BCBD786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE panier_items ADD CONSTRAINT FK_C833C6F0882D7B60 FOREIGN KEY (idproduct_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE panier_items ADD CONSTRAINT FK_C833C6F089663B89 FOREIGN KEY (idpanier_id) REFERENCES panier (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB882D7B60 FOREIGN KEY (idproduct_id) REFERENCES products (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638786A81FB');
        $this->addSql('ALTER TABLE coupon_loyalty_card DROP FOREIGN KEY FK_A27DEC6566C5951B');
        $this->addSql('ALTER TABLE coupon_loyalty_card DROP FOREIGN KEY FK_A27DEC65260D7293');
        $this->addSql('ALTER TABLE loyalty_card DROP FOREIGN KEY FK_EAB8BCBD786A81FB');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2786A81FB');
        $this->addSql('ALTER TABLE panier_items DROP FOREIGN KEY FK_C833C6F0882D7B60');
        $this->addSql('ALTER TABLE panier_items DROP FOREIGN KEY FK_C833C6F089663B89');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB882D7B60');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE coupon');
        $this->addSql('DROP TABLE coupon_loyalty_card');
        $this->addSql('DROP TABLE loyalty_card');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE panier_items');
        $this->addSql('DROP TABLE products');
        $this->addSql('DROP TABLE promo');
        $this->addSql('DROP TABLE user');
    }
}
