Testing Phantomjs cache. It seems to cache Javascript files.

To test.
1. Run \Drupal\Tests\phantomjs_tester\FunctionalJavascript\PhantomJSTest once as is.
2. Both test should fail.
3. Fix JS and Controller as documented in PhantomJSTest
4. Page text assertion should pass. JS assertion should still fail.
5. Restart phantomjs
6. Both assertions should pass.
7. WTF?
