<?php

namespace App\Http\Controllers;


use App\Models\Tag_category;
use Facebook\Facebook;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchTag(Request $request)
    {

        $word=$request->search;
        $fb = new Facebook([
            'app_id' => '1522624067942900',
            'app_secret' => 'd964790080176580274538dc800ed633',
            'default_graph_version' => 'v2.10',
        ]);
        try {
            // Returns a `FacebookFacebookResponse` object
            $hashtag=$fb->get(
                "/ig_hashtag_search?user_id=17841432565366212&q=$word",
                'EAAVo0YqyOfQBAGVZCiMbPoi5nKcbeXiF5H8BlvHPoxZA6VLz14NLbJHMYCm2yZAQMhllZBppOwcvRBNNhm0W2ZBiw31mCM6yw37ZAdkaE2jSKCtY3SEqRZCBKouCmWJENYxnluvc3CQOEz7GUVZCOKx7VffidtbyU5bQeWEhrZAQ7ocnDnQOjv7N4IaqsIp2XvS1I8ZCECYk4qQl5p3RMZB1l1rtvu1al7PIalEgo5PHaMbZCZCMwaWs47jQnx4dFLmTXnYcZD'

            );

            $tagged=$hashtag->getDecodedBody();
            foreach ($tagged as $tag) {
                foreach ($tag as $tagName) {
                    $taggedId=$tagName['id'];
                    $response = $fb->get(
                        "/$taggedId/top_media?user_id=17841432565366212&fields=id,media_type,comments_count,like_count,caption,media_url,permalink,timestamp",
                        'EAAVo0YqyOfQBAGVZCiMbPoi5nKcbeXiF5H8BlvHPoxZA6VLz14NLbJHMYCm2yZAQMhllZBppOwcvRBNNhm0W2ZBiw31mCM6yw37ZAdkaE2jSKCtY3SEqRZCBKouCmWJENYxnluvc3CQOEz7GUVZCOKx7VffidtbyU5bQeWEhrZAQ7ocnDnQOjv7N4IaqsIp2XvS1I8ZCECYk4qQl5p3RMZB1l1rtvu1al7PIalEgo5PHaMbZCZCMwaWs47jQnx4dFLmTXnYcZD'
                    );
                }
            }
        } catch(FacebookExceptionsFacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookExceptionsFacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $data=$response->getDecodedBody();
        return Response($data);
//        if ($request->ajax()) {
//            $category = Tag_category::where('name', 'LIKE', '%' . $request->search . "%")->get();
//            if ($category) {
//                return Response($category);
//            }
//        }
    }
}
