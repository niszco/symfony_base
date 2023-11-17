<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231117153847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE burger_oignon (burger_id INT NOT NULL, oignon_id INT NOT NULL, INDEX IDX_A40C5A0417CE5090 (burger_id), INDEX IDX_A40C5A048F038184 (oignon_id), PRIMARY KEY(burger_id, oignon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE burger_sauce (burger_id INT NOT NULL, sauce_id INT NOT NULL, INDEX IDX_F889AB0F17CE5090 (burger_id), INDEX IDX_F889AB0F7AB984B7 (sauce_id), PRIMARY KEY(burger_id, sauce_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE burger_oignon ADD CONSTRAINT FK_A40C5A0417CE5090 FOREIGN KEY (burger_id) REFERENCES burger (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE burger_oignon ADD CONSTRAINT FK_A40C5A048F038184 FOREIGN KEY (oignon_id) REFERENCES oignon (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE burger_sauce ADD CONSTRAINT FK_F889AB0F17CE5090 FOREIGN KEY (burger_id) REFERENCES burger (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE burger_sauce ADD CONSTRAINT FK_F889AB0F7AB984B7 FOREIGN KEY (sauce_id) REFERENCES sauce (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE burgers_oignons');
        $this->addSql('DROP TABLE burgers_sauces');
        $this->addSql('ALTER TABLE burger ADD commentaires_id INT DEFAULT NULL, CHANGE nom nom_burger VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D17C4B2B0 FOREIGN KEY (commentaires_id) REFERENCES commentaire (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EFE35A0D17C4B2B0 ON burger (commentaires_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE burgers_oignons (burger_id INT NOT NULL, oignon_id INT NOT NULL, INDEX IDX_90C5B4118F038184 (oignon_id), PRIMARY KEY(burger_id, oignon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE burgers_sauces (burger_id INT NOT NULL, sauce_id INT NOT NULL, INDEX IDX_5A86F16F7AB984B7 (sauce_id), INDEX IDX_5A86F16F17CE5090 (burger_id), PRIMARY KEY(burger_id, sauce_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE burger_oignon DROP FOREIGN KEY FK_A40C5A0417CE5090');
        $this->addSql('ALTER TABLE burger_oignon DROP FOREIGN KEY FK_A40C5A048F038184');
        $this->addSql('ALTER TABLE burger_sauce DROP FOREIGN KEY FK_F889AB0F17CE5090');
        $this->addSql('ALTER TABLE burger_sauce DROP FOREIGN KEY FK_F889AB0F7AB984B7');
        $this->addSql('DROP TABLE burger_oignon');
        $this->addSql('DROP TABLE burger_sauce');
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D17C4B2B0');
        $this->addSql('DROP INDEX UNIQ_EFE35A0D17C4B2B0 ON burger');
        $this->addSql('ALTER TABLE burger DROP commentaires_id, CHANGE nom_burger nom VARCHAR(255) NOT NULL');
    }
}
