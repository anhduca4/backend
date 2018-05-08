<?php

use Illuminate\Database\Seeder;
use App\Models\Block\Block;

class BlockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slide = [
            [
                'title' => 'Enhance Business Capabilities with a Tailor-Made AI Platform',
                'description' => 'Our AIX platform puts you in control by allowing you to customise enhance according to your needs and without compromissing security',
                'button_text' => 'Lean more',
                'button_link' => 'http://nexus.local/news',
            ],
            [
                'title' => 'Enhance Business Capabilities with a Tailor-Made AI Platform',
                'description' => 'Our AIX platform puts you in control by allowing you to customise enhance according to your needs and without compromissing security',
                'button_text' => 'Lean more',
                'button_link' => 'http://nexus.local/news',
            ],
            [
                'title' => 'Enhance Business Capabilities with a Tailor-Made AI Platform',
                'description' => 'Our AIX platform puts you in control by allowing you to customise enhance according to your needs and without compromissing security',
                'button_text' => 'Lean more',
                'button_link' => 'http://nexus.local/news',
            ],
            [
                'title' => 'Enhance Business Capabilities with a Tailor-Made AI Platform',
                'description' => 'Our AIX platform puts you in control by allowing you to customise enhance according to your needs and without compromissing security',
                'button_text' => 'Lean more',
                'button_link' => 'http://nexus.local/news',
            ],
        ];
        Block::create([
            'type' => Block::TYPE_SLIDE,
            'content' => json_encode($slide),
        ]);
        $introduce = [
            'title' => 'What can Nexus AI capabilities do for your business?',
            'content' => '
            <p>We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you!</p>
            <p>We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you!</p>
            <p>We are so AMAZED by the exceptional skills and professionalism that TrueThemes has showed our law firm. Their excellent support, fast ticket response and vision into design is top notch! We love this Karma theme and we’re so happy with the incredible assistance we’ve received from TrueThemes! Keep up the great work guys!! And Thank you!</p>
            ',
        ];
        Block::create([
            'type' => Block::TYPE_INTRODUCE,
            'content' => json_encode($introduce),
        ]);
        $product = [
            [
                'title_small' => 'AIX platform',
                'content_small' => 'Customise and enhance the backbone of your AI applications system, ensuring seamless intergration and synergy',
                'title_large' => 'Our AIX platform puts you in control by allowing you to customise and endhance according to your needs',
                'content_large' => '<p>Our AI platform AIX (AI eXecution) is the only one in the market that allows your business to securely adopt and manage the widest array of AI apps both on premises and in the cloud.
                You have the possiblity of continuously adding new AI applications, both built by us and third parties alike, to further enhance the capabilities of your business</p>
                <p>Our AI platform AIX (AI eXecution) is the only one in the market that allows your business to securely adopt and manage the widest array of AI apps both on premises and in the cloud.
                You have the possiblity of continuously adding new AI applications, both built by us and third parties alike, to further enhance the capabilities of your business</p>
                ',
                'button_title' => 'Learn more',
                'button_link' => '#Learn more',
            ],
            [
                'title_small' => 'AI apps',
                'content_small' => 'Automate and consolidate your busunes processes with the latest in AI technology',
                'title_large' => 'Our AIX platform puts you in control by allowing you to customise and endhance according to your needs',
                'content_large' => '<p>Our AI platform AIX (AI eXecution) is the only one in the market that allows your business to securely adopt and manage the widest array of AI apps both on premises and in the cloud.
                You have the possiblity of continuously adding new AI applications, both built by us and third parties alike, to further enhance the capabilities of your business</p>
                <p>Our AI platform AIX (AI eXecution) is the only one in the market that allows your business to securely adopt and manage the widest array of AI apps both on premises and in the cloud.
                You have the possiblity of continuously adding new AI applications, both built by us and third parties alike, to further enhance the capabilities of your business</p>
                ',
                'button_title' => 'Learn more',
                'button_link' => '#Learn more',
            ],
            [
                'title_small' => 'Advisory systems',
                'content_small' => 'Put your trust in a team of experts who care about your bussiness success just as much as you do',
                'title_large' => 'Our AIX platform puts you in control by allowing you to customise and endhance according to your needs',
                'content_large' => '<p>Our AI platform AIX (AI eXecution) is the only one in the market that allows your business to securely adopt and manage the widest array of AI apps both on premises and in the cloud.
                You have the possiblity of continuously adding new AI applications, both built by us and third parties alike, to further enhance the capabilities of your business</p>
                <p>Our AI platform AIX (AI eXecution) is the only one in the market that allows your business to securely adopt and manage the widest array of AI apps both on premises and in the cloud.
                You have the possiblity of continuously adding new AI applications, both built by us and third parties alike, to further enhance the capabilities of your business</p>
                ',
                'button_title' => 'Learn more',
                'button_link' => '#Learn more',
            ],
        ];
        Block::create([
            'type' => Block::TYPE_PRODUCT,
            'content' => json_encode($product),
        ]);
        $scope = '[{"name": "Business Areas", "children": [{"name": "Sales"}, {"name": "Security/Authentication"}, {"name": "Compliance"}, {"name": "Fraud detection"}, {"name": "Human Resources/Recruiting"}, {"name": "Marketing"}, {"name": "Secretarial"}, {"name": "Business Intelligence"}]}, {"name": "Types of Processes", "children": [{"name": "Business Processes", "children": [{"name": "Contract Management"}, {"name": "Compliance Management"}, {"name": "Data Management"}, {"name": "Stackholders Management"}]}, {"name": "Marketing Processes", "children": [{"name": "Questionnaire Survey"}, {"name": "Recommendation"}, {"name": "Blog/SNS Management"}, {"name": "Advertisement Management"}]}, {"name": "Survery / Research Processes", "children": [{"name": "Price Survey"}, {"name": "Competitor Analysis"}, {"name": "Procuremnt Management"}]}]}, {"name": "Types of Documents", "children": [{"name": "Application forms"}, {"name": "Receipts/Invoices"}, {"name": "Certificates"}, {"name": "Contracts"}, {"name": "Emails"}, {"name": "Bussiness Cards"}, {"name": "Resumes/CVs"}, {"name": "Expense Claims"}, {"name": "Identification Cards"}, {"name": "Etc."}]}]';
        Block::create(['type' => Block::TYPE_SCOPES,'content' => $scope,]);
        $bennefit = [
            [
                'title' => 'Reducted Costs',
                'content' => 'Elimate excess use of time and money to collect and extract minimal infomation',
            ],
            [
                'title' => 'Minimal Waste',
                'content' => 'Automatically collect and sort through previously overlooked data to ensure optimal use of resources and value-added to your business',
            ],
            [
                'title' => 'Seciruty',
                'content' => 'Meet your busuness\' compliance needs by controling and utilising data in a more secured way, assuring the safekeeping of highly sensitive infomation',
            ],
            [
                'title' => 'Accuracy',
                'content' => 'Drastically reduce probability of error using manual input with up to 99.2% accuracy levels in all major languages',
            ],
        ];
        Block::create([
            'type' => Block::TYPE_BENNEFIT,
            'content' => json_encode($bennefit),
        ]);
        $team = [
           [
                'type' => 'CEO',
                'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                'name' => 'Terence Tse, PhD',
                'intro' => 'Based in London, Terence has been an educator, keynote speaker and commentator as well as advisor working with businesses around  the world and
                the EU, UN and the Word Economic Forum. He is the co-author of the bestseller Understanding How the Future Unfolds: Using Drive to Harness the Power of 
                Today\'s Megatrends. Nexus Frontier Tech is his second venture',
           ],
           [
                'type' => 'CEO',
                'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                'name' => 'Terence Tse, PhD',
                'intro' => 'Based in London, Terence has been an educator, keynote speaker and commentator as well as advisor working with businesses around  the world and
                the EU, UN and the Word Economic Forum. He is the co-author of the bestseller Understanding How the Future Unfolds: Using Drive to Harness the Power of 
                Today\'s Megatrends. Nexus Frontier Tech is his second venture',
           ],
           [
                'type' => 'CEO',
                'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                'name' => 'Terence Tse, PhD',
                'intro' => 'Based in London, Terence has been an educator, keynote speaker and commentator as well as advisor working with businesses around  the world and
                the EU, UN and the Word Economic Forum. He is the co-author of the bestseller Understanding How the Future Unfolds: Using Drive to Harness the Power of 
                Today\'s Megatrends. Nexus Frontier Tech is his second venture',
           ],
           [
                'type' => 'CEO',
                'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                'name' => 'Terence Tse, PhD',
                'intro' => 'Based in London, Terence has been an educator, keynote speaker and commentator as well as advisor working with businesses around  the world and
                the EU, UN and the Word Economic Forum. He is the co-author of the bestseller Understanding How the Future Unfolds: Using Drive to Harness the Power of 
                Today\'s Megatrends. Nexus Frontier Tech is his second venture',
           ],
           [
                'type' => 'CEO',
                'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                'name' => 'Terence Tse, PhD',
                'intro' => 'Based in London, Terence has been an educator, keynote speaker and commentator as well as advisor working with businesses around  the world and
                the EU, UN and the Word Economic Forum. He is the co-author of the bestseller Understanding How the Future Unfolds: Using Drive to Harness the Power of 
                Today\'s Megatrends. Nexus Frontier Tech is his second venture',
           ],
           
        ];
        Block::create([
            'type' => Block::TYPE_TEAM,
            'content' => json_encode($team),
        ]);
        $network = [
            'intro' => 'We work with 50+ experts from various industries with profound experiences in handling AI technologies and implementation',
            'team' => [
                [
                    'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                    'type' => 'CHIEF AI SCIENTIST',
                    'name' => 'Jenny Lee, Phd',
                ],
                [
                    'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                    'type' => 'CHIEF AI SCIENTIST',
                    'name' => 'Jenny Lee, Phd',
                ],
                [
                    'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                    'type' => 'CHIEF AI SCIENTIST',
                    'name' => 'Jenny Lee, Phd',
                ],
                [
                    'image' => 'https://www.w3schools.com/howto/img_avatar2.png',
                    'type' => 'CHIEF AI SCIENTIST',
                    'name' => 'Jenny Lee, Phd',
                ],
            ],
            'image_intro' => 'https://thumbs.dreamstime.com/z/startup-diversity-teamwork-brainstorming-meeting-concept-business-team-coworkers-global-sharing-economy-laptop-touchscreen-people-76810754.jpg',
            'title' => 'We team up with the industry\'s best to unlock and accelerate growth',
            'content' => 'We believe in the power of collaboration.We partner with some of the best in the industry to ensure westay ahead of the game and equiped with the tools necessary to accelerate business and generate value',
        ];
        Block::create([
            'type' => Block::TYPE_NETWORK,
            'content' => json_encode($network),
        ]);
        $contactus = [
            'html' => '<p>Want more information regarding our products, services or demos? Curious as to how AI can make your business run more efficienty? Interested in joining our network of experts?</p>
            <p>Whaterver it is, give us a shout!</p>',
        ];
        Block::create([
            'type' => Block::TYPE_CONTACT_US,
            'content' => json_encode($contactus),
        ]);
        $footer = [
            'social' => [
                [
                    'title' => 'Facebook',
                    'link' => 'https://www.facebook.com/duong.trang.332345',
                ],
                [
                    'title' => 'Linkin',
                    'link' => 'https://www.facebook.com/duong.trang.332345',
                ],
                [
                    'title' => 'G+',
                    'link' => 'https://www.facebook.com/duong.trang.332345',
                ],
                [
                    'title' => 'Medium',
                    'link' => 'https://www.facebook.com/duong.trang.332345',
                ],
            ],
            'contact' => [
                'address' => 'Cocoon Networks London 4 Chritopher St.London, EC2A 2BS, UK',
                'email' => 'info@nexusfrontier.tech',
            ],
            'policy' => [
                [
                    'title' => 'Terms of use',
                    'link' => 'https://local.local/'
                ],
                [
                    'title' => 'Private policy',
                    'link' => 'https://local.local/'
                ],
            ]
        ];
        Block::create([
            'type' => Block::TYPE_FOOTER,
            'content' => json_encode($footer),
        ]);
         
    }
}
