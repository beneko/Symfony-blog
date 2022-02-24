<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        for($i=1; $i<=10; $i++){
            $article = new Article();
            $article->setTitre("Titre de l'article numéro $i")
                    ->setContent("Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit possimus quibusdam eveniet cum itaque non autem repudiandae, quos, ipsa quo mollitia praesentium nemo officiis veritatis commodi, omnis quisquam ad voluptas! Autem magni quidem dolorem. Earum nobis consequatur minima molestias temporibus, consequuntur odio dicta, aliquam veritatis eum accusantium sint repellendus. Sit hic id laboriosam et recusandae. Quas voluptas veritatis, odit ipsa fuga reiciendis. Pariatur accusamus consectetur magnam at quae totam nemo! Dolor, soluta ab repellat repellendus repudiandae corrupti obcaecati quisquam nesciunt temporibus! Inventore et nulla assumenda, cumque consequatur veniam ab dolorum ullam sint dolore minima laboriosam perspiciatis corporis iusto corrupti ducimus sequi dolor. Quos, aliquam. Voluptatibus libero at, deleniti nemo iste, nihil aperiam impedit pariatur, ratione possimus numquam consectetur voluptatem sequi necessitatibus porro aut dolorem. Totam sed ratione magni odit, dolorum repellat nobis maxime sunt reprehenderit fugiat, delectus beatae eligendi aperiam qui. Nihil dolorum eum officiis impedit laborum ab illo consectetur.</p>
                    <p>Fuga, tenetur. Doloribus nobis deserunt eum sint, distinctio architecto, eligendi maiores natus culpa recusandae eveniet eaque a odit unde, quisquam dignissimos dolores beatae. Nulla voluptatum id quia voluptates rem. Nisi, aperiam omnis molestias recusandae minus officiis repellendus perferendis quaerat. Doloremque beatae accusamus vitae incidunt tempora labore eligendi obcaecati fuga alias maxime commodi enim, repellat pariatur iste odio, quisquam minima earum, libero fugit esse optio quae voluptatem! Eaque sunt quas dolorem similique, accusamus animi vel quasi voluptas facere quibusdam. Quis nam mollitia voluptates at nisi aut reprehenderit reiciendis nesciunt ducimus, ipsam officia asperiores delectus sapiente doloribus corporis aliquam consequatur non perferendis amet ut natus rerum, quos deleniti quaerat? Nobis magnam ab magni architecto quam reiciendis quibusdam, repellendus obcaecati facere ullam aut suscipit, optio tempora a dolorum repudiandae eligendi doloremque nulla sit accusantium. Incidunt esse ad ipsum adipisci vel, impedit maiores vero porro sit provident quidem necessitatibus obcaecati, natus sapiente quibusdam excepturi!</p>
                    <p>Dolorem omnis ratione amet architecto voluptate tenetur nemo. Sapiente a repudiandae ea quasi aut ad odio vel tempora sed neque, accusamus non sint, modi quibusdam dignissimos labore fuga animi fugit, cum quis maxime optio placeat debitis doloremque. Doloremque at, odio aliquid natus id ullam tempore cumque perferendis, tenetur voluptas autem eius perspiciatis quis! Sunt, soluta! Cum, mollitia. Modi, accusamus. Molestiae voluptatem nulla, fugit veritatis sit alias. Doloribus aliquid ut vero explicabo quam sit enim blanditiis nihil veniam delectus accusamus fugiat laboriosam aliquam rem aut magnam, labore ad expedita obcaecati suscipit dolorum ipsum vitae! Unde ullam nemo cumque amet pariatur in praesentium iusto rem, maxime totam quas reprehenderit magnam numquam voluptates consectetur impedit quis accusantium suscipit, facilis dolor fugit. Iste, impedit. Praesentium blanditiis mollitia officia, porro voluptates, dicta dolore aperiam autem incidunt perspiciatis, quasi odit. Facere, fugit porro quia, aliquam aperiam est atque nisi repudiandae veniam non rerum optio eum nostrum.</p>")
                    ->setImage("https://via.placeholder.com/800x600")
                    ->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($article);
        }

        $manager->flush();
    }
}
