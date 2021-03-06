 <form name="form1" action="html_form_action.asp" method="post">
Username: <input type="text" name="textvar1">

<input type="hidden" name="hiddenvar" value="">

<input type="button" value="Submit" onclick='JSFUNC(this.form, form2.form)>
</form>

<form name="form2" action="html_form_action2.asp" method="post">
Username: <input type="text" name="textvar2">
<input type="submit" value="Submit">
</form>

What I'd like to do is be able to click a button that will take form2's textvar2 element as a parameter then submit form1 with element hiddenvar with a value of the form2 element textvar2.

Just for testing I have this as my javascript:

function JSFUNC(form1, form2)
{
var Item = form2.textvar2.value;

alert(Item);
form1.submit();

}

This doesn't work, the JS chokes on trying to set var Item.  I've tried a bunch of variations and sometimes get the alert to spit out "undefined".  It seems the main problem is passing in the form2 parameter.  Would it be better to get the form2 element value and pass that as a parameter instead?

Am I going about this completely the wrong way?

As always, thanks!
Reply
6
Subscribe
Best Answer
Bill2718
Bill2718 Oct 17, 2012 at 12:53 AM

More info and some debate on this here...

http://stackoverflow.com/questions/2435525/best-practice-access-form-elements-by-html-id-or-name-attribute
View this "Best Answer" in the replies below �
6 Replies
Bill2718
Datil
Bill2718 Oct 17, 2012 at 12:50 AM

I think Item is looking for an id, not a name, maybe try this

Username: <input type="text" name="textvar2" id="textvar2">

Also you may want to add document. to your form reference. Or maybe reference the element using GetElementById...

 

    Was this post helpful?
    Spice
    (1)
    Reply

Bill2718
Datil
Best Answer
Bill2718 Oct 17, 2012 at 12:53 AM

More info and some debate on this here...

http://stackoverflow.com/questions/2435525/best-practice-access-form-elements-by-html-id-or-name-attribute

    Was this post helpful?
    Spice
    (1)
    Reply

AdamRPL
Chipotle
OP Marked as Helpful Post
AdamRPL Oct 17, 2012 at 1:29 AM

Change JSFUNC(this.form, form2.form) to JSFUNC(this.form, document.form2). It worked for me.

    Was this post helpful?
    Spice
    (1)
    Reply

amenconi
Jalapeno
OP
amenconi Oct 17, 2012 at 1:31 AM

Thanks for that Bill.

For whatever reason my trouble seemed to stem from trying to pass a second form object as a parameter.  I finally got what I needed by passing in document.formname.elementname.value as the second parameter for the JS function.

Might be better to reference by id however I'm just trying to temporary fix something that will be replaced a few months down the road so quick and dirty works.

This was time sensitive so really appreciate the quick response and help.

    Was this post helpful?
    Spice
    (1)
    Reply

amenconi
Jalapeno
OP
amenconi Oct 17, 2012 at 1:31 AM

Oops replied before I saw your entry Adam.  I'll test that out too, thanks.

    Was this post helpful?
    Spice
    Reply

amenconi
Jalapeno
OP
amenconi Oct 17, 2012 at 1:34 AM

Yep document.form2 also works.  You guys are awesome.

    Was this post helpful?
    Spice
    (1)
    Reply

Subscribe

This discussion has been inactive for over a year.

You may get a better answer to your question by starting a new discussion.
Know the answer? Log in to reply and help amenconi out and earn 10 points!

Didn't find what you were looking for? Search the forums for similar questions or check out the Web Development forum.
