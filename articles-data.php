<?
function list_authors($authors){
  $list = array();
  foreach($authors as $a){
     $list[] = '<a href="'.$a['id'].'">'.$a['name'].'</a>';
  }
  if(count($authors) > 1) {
    $list[count($authors)-1] = "&amp; ".$list[count($authors)-1];
  }
  $list = implode(", ", $list);
  return $list;
}
// TODO: One day this will be generated from an inbox, or something..
// TODO: add tags so that one day these might be sorted
// ,array(
//      "id" => ""
//     ,"name" => ""
//     ,"published" => new DateTime("")
//     ,"author" => array(array(
//          "id" => ""
//         ,"name" => ""
//       ))
//     ,"summary" => ""
//     ,"slug" => ""
//     ,"root" => ""
//   )
$articles = array(
  array(
     "id" => "https://rhiaro.co.uk/2016/10/580f529169a52"
    ,"name" => "On the 'small effort' of self-archiving"
    ,"published" => new DateTime("2016-10-25")
    ,"author" => array(array(
         "id" => "https://rhiaro.co.uk/#me"
        ,"name" => "Amy Guy"
      ))
    ,"summary" => "<p>If you are Web savvy, it is a 'small effort' to self-archive your work in a space you control. But not everyone can manage that.</p>"
    ,"slug" => "self-archiving"
    ,"root" => "rhiaro.co.uk"
  )
  ,array(
     "id" => "https://www.eff.org/deeplinks/2016/08/stupid-patent-month-elsevier-patents-online-peer-review"
    ,"name" => "Stupid Patent of the Month: Elsevier Patents Online Peer Review"
    ,"published" => new DateTime("2016-08-31")
    ,"author" => array(array(
         "id" => "https://www.eff.org/about/staff/elliot-harmon"
        ,"name" => "Elliot Harmon"
      ),
      array(
           "id" => "https://www.eff.org/about/staff/daniel-nazer"
          ,"name" => "Daniel Nazer"
        )
      )
    ,"summary" => "<p>On August 30, 2016, the Patent Office issued U.S. Patent No. 9,430,468, titled; “Online peer review and method.” The owner of this patent is none other than Elsevier, the giant academic publisher. When it first applied for the patent, Elsevier sought very broad claims that could have covered a wide range of online peer review. </p>"
    ,"slug" => "stupid-patent-month-elsevier-patents-online-peer-review"
    ,"root" => "eff.org"
  )
  ,array(
     "id" => "http://rufuspollock.org/2016/05/16/open-scholarly-publishing/"
    ,"name" => "Open Scholarly Publishing"
    ,"published" => new DateTime("2016-05-15")
    ,"author" => array(array(
         "id" => "http://rufuspollock.org"
        ,"name" => "Rufus Pollock"
      ))
    ,"summary" => "<p>Our current system for scholarly publishing is highly inefficient and poorly suited to the Internet age. An open model would cure many of the current ills as well as offering greater flexibility and greater potential for innovation. However, exactly how an open model would work, and how it would be funded has not always been clear.</p>"
    ,"slug" => "open-scholarly-publishing"
    ,"root" => "rufuspollock.org"
  )
  ,array(
     "id" => "https://blogs.ch.cam.ac.uk/pmr/2016/04/30/a-commentary-on-sci-hub-1-scholarly-publishing-is-broken/"
    ,"name" => "A commentary on Sci-hub: 1. Scholarly publishing is broken"
    ,"published" => new DateTime("2016-04-30")
    ,"author" => array(array(
         "id" => "https://blogs.ch.cam.ac.uk/pmr"
        ,"name" => "Peter Murray-Rust"
      ))
    ,"summary" => "<p>Many of you will already have read of Science Magazine’s account of Sci-Hub, the “pirate” site for scholarly publications. “Science” is often seen as one to the 'top three' outlets, along with Nature and Cell.</p>"
    ,"slug" => "a-commentary-on-schi-hub-1"
    ,"root" => "blogs.ch.cam.ac.uk"
  )
  ,array(
     "id" => "https://hypothes.is/blog/a-coalition-of-scholarly-annotators/"
    ,"name" => "A coalition for scholarly annotation"
    ,"published" => new DateTime("2016-04-27")
    ,"author" => array(array(
         "id" => "https://hypothes.is/blog/author/judell/"
        ,"name" => "Jon Udell"
      ))
    ,"summary" => "<p>On April 17th, the Annotating all Knowledge coalition gathered in Portland to begin the work of defining, designing, and implementing a common framework for scholarly collaboration. Members of the coalition include publishers, platform providers, librarians, standards makers, and technologists who share a common interest in annotation of all scholarly content for the benefit of scientists, humanists, students, teachers, and citizens.</p>"
    ,"slug" => "a-coalition-of-scholarly-annotators"
    ,"root" => "hypothes.is"
  )
  ,array(
     "id" => "https://www.force11.org/fairprinciples"
    ,"name" => "The FAIR Guiding Principles for scientific data management and stewardship"
    ,"published" => new DateTime("2016-03-15")
    ,"author" => array(array(
         "id" => "http://www.wilkinsonlab.info/lab/node/22"
        ,"name" => "Mark D. Wilkinson"
      ),
      array(
          "id" => "https://www.force11.org/group/fairgroup"
          ,"name" => "The FAIR Group"
        )
    )
    ,"summary" => "<p>In the eScience ecosystem, the challenge of enabling optimal use of research data and methods is a complex one with multiple stakeholders: Researchers wanting to share their data and interpretations; Professional data publishers offering their services, software and tool-builders providing data analysis and processing services; Funding agencies (private and public) increasingly concerned with proper Data Stewardship; and a Data Science community mining, integrating and analysing the output to advance discovery. Computational analysis to discover meaningful patterns in massive, interlinked datasets is rapidly becoming a routine research activity. Providing machine-readable data as the main substrate for Knowledge Discovery and for these eScientific processes to run smoothly and sustainably is one of the Grand Challenges of eScience.</p>"
    ,"slug" => "fairprinciples"
    ,"root" => "force11.org"
  )
  ,array(
     "id" => "https://rawgit.com/essepuntato/rash/master/papers/rash-demo-iswc2015.html"
    ,"name" => "The RASH Framework: enabling HTML+RDF submissions in scholarly venues"
    ,"published" => new DateTime("2016-02-16")
    ,"author" => array(array(
         "id" => "http://essepuntato.it"
        ,"name" => "Silvio Peroni"
      ))
    ,"summary" => "<p>This paper introduces the RASH Framework, i.e., a set of specifications and tools for writing academic articles in RASH, a simplified version of HTML. RASH focuses strictly on writing the content of the paper leaving all the issues about its validation, visualisation, conversion, and data extraction to the tools developed within the framework.</p>"
    ,"slug" => "rash-demo-iswc2015"
    ,"root" => "rawgit.com"
  )
  ,array(
     "id" => "http://csarven.ca/linked-research-scholarly-communication"
    ,"name" => "Linked Research: An Approach for Scholarly Communication"
    ,"published" => new DateTime("2015-12-20")
    ,"author" => array(
        array(
           "id" => "http://csarven.ca/#i"
          ,"name" => "Sarven Capadisli"
        ),
        array(
           "id" => "https://rhiaro.co.uk/#me"
          ,"name" => "Amy Guy"
        ),
        array(
           "id" => "https://langec.wordpress.com/about/"
          ,"name" => "Christoph Lange"
        ),
        array(
           "id" => "http://eis.iai.uni-bonn.de/SoerenAuer.html"
          ,"name" => "Sören Auer"
        ),
        array(
           "id" => "https://nicola.io"
          ,"name" => "Nicola Greco"
        )
      )
    ,"summary" => "<p>The future of scholarly communication involves research results, analysis and data all being produced, published, verified and reused interactively on the Web, with ‘papers’ linking to and from each other at a granular level. The academic process of peer review is increasingly becoming open, transparent and decentralised. More broadly, the mechanism for global knowledge sharing is becoming an ongoing conversation between experts, policy makers, implementers, and the general public. This vision is radical, and getting there requires understanding of, and change in, a number of interrelated areas. In this article we break down the problem space and define requirements for advancement towards a Web-based ecosystem for scholarly communication: Linked Research. We discuss our strategy for tackling each of these areas. This includes how we can build on and combine existing well-known technologies and practices for digital publishing, social interactions, decentralised data storage, and semantic data enrichment. We provide an initial assessment of our proposed strategy through an example implementation of tooling which sets out to meet the requirements.</p>"
    ,"slug" => "linked-research-scholarly-communication"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "http://csarven.ca/dokieli"
    ,"name" => "dokieli: decentralised authoring, annotations and social notifications"
    ,"published" => new DateTime("2015-12-19")
    ,"author" => array(
        array(
           "id" => "http://csarven.ca/#i"
          ,"name" => "Sarven Capadisli"
        ),
        array(
           "id" => "https://rhiaro.co.uk/#me"
          ,"name" => "Amy Guy"
        ),
        array(
           "id" => "http://eis.iai.uni-bonn.de/SoerenAuer.html"
          ,"name" => "Sören Auer"
        ),
        array(
           "id" => "https://www.w3.org/People/Berners-Lee/"
          ,"name" => "Tim Berners-Lee"
        )
      )
    ,"summary" => "<p>In this article we present an architecture for progressively enhanced user-facing linked data applications and demonstrate this architecture through an open source example implementation: dokieli. dokieli is a general purpose client-side application for document authoring, publication and interaction. Capabilities of the tool are enabled according to the needs and technical resources of the user. The editor is built on open Web standards and the documents are compliant with Linked Data best practices, allowing: decentralised storage and data ownership; fine-grained semantic structure through HTML+RDFa; direct in-browser editing from an LDP-based personal data store; social interactions with documents (such as annotations and replies), and notifications thereof. </p>"
    ,"slug" => "dokieli"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://twitter.com/tompollard/status/669927001948557312"
    ,"name" => "Open Access Hack"
    ,"published" => new DateTime("2015-11-26")
    ,"author" => array(array(
         "id" => "https://twitter.com/tompollard/"
        ,"name" => "Tom Pollard"
      ))
    ,"summary" => "<p>Excellent #openaccess hack by @csarven: Added URL for full article in paywalled abstract</p>"
    ,"slug" => "open-access-hack"
    ,"root" => "twitter.com"
  )
  ,array(
     "id" => "http://csarven.ca/this-paper-is-a-demo"
    ,"name" => "This 'paper' is a demo"
    ,"published" => new DateTime("2015-02-24")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>This 'paper'’', when viewed on the Web, is the demo itself, since the interactive and semantic features can be directly observed while reading and consuming. The demo showcases, how scholarly communication can adapt to the audience, whether the content is read on a screen or printed on paper, listen with a screen reader, watched as a movie, shown as a presentation, or even interacted with in the document.</p>"
    ,"slug" => "this-paper-is-a-demo"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "http://csarven.ca/enabling-accessible-knowledge"
    ,"name" => "Enabling Accessible Knowledge"
    ,"published" => new DateTime("2014-12-08")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>The purpose of this document is to enable Web researchers to discover and share their knowledge using the native Web technologies and standards for maximum openness, accessibility, and flexibility.</p>"
    ,"slug" => "enabling-accessible-knowledge"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://hypothes.is/blog/supporting-open-annotation/"
    ,"name" => "Supporting Open Annotation"
    ,"published" => new DateTime("2014-10-07")
    ,"author" => array(array(
         "id" => "https://hypothes.is/blog/author/treora/"
        ,"name" => "Gerben"
      ))
    ,"summary" => "<p>In its mission to connect the world’s knowledge and thoughts, the solution Hypothes.is pursues is a web-wide mechanism to create, share and discover annotations. One of our principal steps towards this end is providing a browser add-on that works with our annotation server, enabling people to read others’ annotations on any web page they visit, and to publish their own annotations for others to see.</p>"
    ,"slug" => "supporting-open-annotation"
    ,"root" => "hypothes.is"
  )
  ,array(
     "id" => "http://csarven.ca/call-for-linked-research"
    ,"name" => "Call for Linked Research"
    ,"published" => new DateTime("2014-07-28")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>Scientists and researchers who work in Web Science have to follow the rules that are set by the publisher; researchers need to have read and reuse access to other researchers work, and adopt archaic desktop-native publishing workflows. Publishers try to remain as the middleman for society’s knowledge acquisition.</p>"
    ,"slug" => "call-for-linked-research"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://hypothes.is/blog/peer-review-annotation/"
    ,"name" => "Peer Review and Annotation"
    ,"published" => new DateTime("2014-06-07")
    ,"author" => array(array(
         "id" => "https://hypothes.is/blog/author/pbrantley/"
        ,"name" => "P Brantley"
      ))
    ,"summary" => "<p>On May 15-16, 2014, approximately 60 attendees from AAAS and arXiv to the W3C joined Hypothes.is at an Alfred P. Sloan funded meeting at the American Geophysical Union (AGU) offices in Washington DC to explore new models of peer review and post-publication commentary in the sciences.</p>"
    ,"slug" => "peer-review-annotation"
    ,"root" => "hypothes.is"
  )
  ,array(
     "id" => "http://csarven.ca/linked-research"
    ,"name" => "Linked Research"
    ,"published" => new DateTime("2013-05-17")
    ,"author" => array(array(
         "id" => "http://csarven.ca/#i"
        ,"name" => "Sarven Capadisli"
      ))
    ,"summary" => "<p>Information control is just an idea and should not to be mistaken as something new. It is an idea that's like a splinter in the minds of some, driving them mad.</p>"
    ,"slug" => "linked-research"
    ,"root" => "csarven.ca"
  )
  ,array(
     "id" => "https://blogs.ch.cam.ac.uk/pmr/2011/07/09/what-is-wrong-with-scientific-publishing-and-can-we-put-it-right-before-it-is-too-late/"
    ,"name" => "What is wrong with Scientific Publishing and can we put it right before it is too late?"
    ,"published" => new DateTime("2011-07-09")
    ,"author" => array(array(
         "id" => "https://blogs.ch.cam.ac.uk/pmr"
        ,"name" => "Peter Murray-Rust"
      ))
    ,"summary" => "<p>I sat down today to write code and and found that I couldn't – I had to write about science publishing, so here goes. I intend this will be the first of several posts. I often blog in forceful style (rant?) but here will try to be as objective as possible. I'd like to start a discussion and engage responsible STM publishers. I'd like to see if we can define what the basis of publishing is. Why? And how? </p>"
    ,"slug" => "what-is-wrong-with-scientific-publishing"
    ,"root" => "blogs.ch.cam.ac.uk"
  )
  ,array(
     "id" => "http://www.chronicle.com/article/a-manifesto-for-scholarly/44462"
    ,"name" => "A Manifesto for Scholarly Publishing"
    ,"published" => new DateTime("2009-06-02")
    ,"author" => array(array(
         "id" => "http://press.princeton.edu/about_pup/dougherty.html"
        ,"name" => "Peter J. Dougherty"
      ))
    ,"summary" => "<p>In 1948, the University of Illinois Press published Claude Shannon's brief and profoundly influential book The Mathematical Theory of Communication. Shannon's work, which explained how words, sounds, and images could be converted into blips and sent electronically, presaged the digital revolution in communications.</p>"
    ,"slug" => "a-manifesto-for-scholarly"
    ,"root" => "chronicle.com"
  )
);
?>