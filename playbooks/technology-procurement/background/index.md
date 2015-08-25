---
layout: resource
status: beta
title: Government technology procurement
subtitle: How governments buy technology to deliver digital services. 
status: 		alpha
feedback-name: 	"Dan Hon"
feedback-email:	dan@codeforamerica.org

nav-breadcrumbs:
  - "Government technology procurement": "/playbooks/technology-procurement/"

---

## Background

In 2015, it’s normal for government technology projects to be late, over budget or to not work.  These projects have drawn attention to how governments buy and deliver technology to its residents and staff.

Businesses are also dealing with how technology can help them compete, provide better service and do more with less. Like governments, their technology projects are failing as well.

These failures are happening even though procurement is getting stricter and more prescriptive. 

Most government technology is treated like a solution, bought from a vendor in a complex and slow process. Technology is much more complicated than that, but, it’s rare for governments, to understand, develop, deliver and support technology on their own.

The internet, web and smartphones are changing the lives of all Americans are building new, higher expectations of how the world should work. Technology and its ability to deliver significant improvements has massively changed over the last twenty years. 

Large companies like Google, Facebook and Apple deliver services used and loved by hundreds of millions of people for the fraction of the cost of a large government RFP. 

Well-designed government digital services can be so good that people prefer to use them.

Users are surprised when government services work as quickly as commercial services:

> “With Simplicity, it’s so fast that people were refreshing and thinking, “it didn’t take my query.” The team fixed that by putting in a fake spinning thing. Haha!”
>  - [Asheville, North Carolina CIO Jonathan Feldman](http://www.codeforamerica.org/blog/2015/06/18/creating-simplicity-a-qa-with-asheville-cio-jonathan-feldman/)

And in the UK, government call centers have had to [add a way to record positive feedback](https://gds.blog.gov.uk/2013/08/23/this-week-at-gds-44/). 

## How governments buy technology

This guide explains how governments treat and buy the technology needed to deliver digital services. These services range from the outwardly simple (for example, a maternity leave or minimum wage calculator) - to the complex (like benefit eligibility, tax filing, healthcare, education, immigration services and other social services). All of these services are important and critical. They are also not just social program services: starting businesses, paying employees and buying property are all things that citizens and residents need to do that involve the government, all around the world. 

Some of these services are also called the safety net because they are frequently services of the last resort, which means that the government is the only provider. For many people, there are no alternatives to enrolling for social welfare programs. 

First, government technology is treated as if it is special. 

### 1. Government technology is special 

#### Government technology is uniquely big

The services government delivers are frequently seen by government as being unique in size. Because of their history, the infrastructure used to support these services is appropriate to the time when they were built. In the 1990s, there weren’t many ways to deliver IT systems for hundreds or thousands of users, nor to handle millions of records. The sizes of these systems  did make them special at the time. Many government services that were designed in the early 1990s had to support hundreds of users at once. The ones that are still in use are now being asked to support thousands or tens of thousands of users. The computers that these services run on -- expensive mainframe systems that made sense and sometimes were the only choice in the late 1980s and early 1990s -- aren't needed now. 

In the 1990s, governments were probably the most common users of such large systems and services. In 2015, thanks to Moore’s law, they are not, and systems and services that deal with such large amounts of information and users are not out of the ordinary at all. Technology companies and startups have delivered reliable, responsive hardware and software for many more users than typical government services using less resources and costing less money. Systems that required expensive mainframes in the early 1990s can now be delivered from a $600 smartphone or a $2,000 laptop or from cloud infrastructure that doesn’t even incur a capital cost. 

#### Government technology must be reliable

Government services are services of the last resort that people depend and rely on. Because of this, governments typically (and rightly) require services to be available more-or-less at all times, despite the same requirements not being applied to in-person or telephone service delivery. This makes sense, because the promise of digital is to massively increase the public’s access to the services that government is mandated to provide. 

However, the policy-driven, top-down way that governments require services to be delivered has not allowed government to take advantage of new techniques to deliver dependability and availability that have been demonstrated by the commercial sector.

#### Government technology must be secure and private

Government services have the potential to record a lot of sensitive, confidential or private data about citizens and residents. Such data really does need to be secure. However, the traditional government policy-driven approach to security requirements has not in practice led to [more secure systems](http://www.washingtonpost.com/opinions/a-breach-of-responsibility/2015/06/16/040a21a4-1422-11e5-89f3-61410da94eb1_story.html). 

The private sector has shown that successful security is a practice, not a requirement. Security and privacy are not features that government can buy. 

#### Government technology is old

Twenty years is a long time in technology. A history of treating technology as products or solutions to be bought, frozen and maintained has left governments with a large number of legacy systems that are proprietary, closed-source and with limited ability to extract or export data. 

### 2. Government technology satisfies policy needs, not user needs

> “We need to continually test the products we build with real people to keep us honest about what is important.”
> [U.S. Digital Service Playbook](https://playbook.cio.gov/#play1)

The procurement model of government digital services generally leads to services that satisfy policy needs, not user needs. In other words, it is easy to specify and deliver services that adhere to the letter of the law, whilst at the same time missing the spirit of the law. 

A good explanation in Mike Bracken’s (the United Kingdom Cabinet Office Executive Director of Digital and head of the Government Digital Service) blog post, [The Strategy is Delivery](http://mikebracken.com/blog/the-strategy-is-delivery-again/):

> “For digital services, we usually start with a detailed policy.... ...We then look to embed that in current process, or put simply, look for a digital version of how services are delivered in different channels. This is why so many of our digital services look like clunky, hard-to-use versions of our paper forms: because the process behind the paper version dictates the digital thinking.”
> [The Strategy is Delivery](http://mikebracken.com/blog/the-strategy-is-delivery-again/) - Mike Bracken

When government starts with designing and buying products, solutions or systems from policy, users are excluded from the start and their needs and outcomes will always be at best secondary to department or agency needs. This approach rarely if ever leads to digital services that work, never mind services that are humane. 

Kentucky’s health insurance exchange, [kynect](https://kynect.ky.gov/) is a good example: it doesn’t make its users create an account before they can see available plans. The kynect team recognized that the goal was to make enrollment easy - and that requiring users to sign in or create an account before being able to see any information about a plan would be a big barrier. 

In Asheville’s [SimpliCity](http://cityofasheville.github.io/simplicity-ui/#/search), developed in-house, a focus on user needs meant that eight different mapping products and services were replaced with just one service that now delights users instead of aggravating them. SimpliCity combines the approach of integrating legacy back-end enterprise services with new cloud-based services as well as a user research-led approach.

### 3. Relying on outsourcing has meant less digital knowledge in government

Most governments rely on vendors and outsourcing to deliver digital services through a valid need to provide value for money. Unfortunately, relying on vendors and outsourcing has over time lead to to a lack of experience and understanding in government of what's needed to deliver a modern, user-centered digtal service. Worse, relying on outsourcing has turned IT in government into more of a contract and project management capability whose job is to buy products and solutions, leading to a vicious circle. This lack of understanding and ownership in digital services results in less effective and efficient services. When these services inevitably result in poor user experiences, they leave citizens with less trust in government. 

### 4. Surprises are politically undesirable and must be avoided

Bad surprises - late, broken or expensive projects - are bad news to anyone working in government, no matter how removed they may be from public politics. Wanting to avoid bad surprises - which is completely reasonable and understandable - is normally dealt with by becoming more detailed and prescriptive. In the end, this rational desire to reduce the risk of bad news is part of why RFPs now tend to hundreds of pages of detailed requirements, contributing to the problem without reducing risk at all. 

It seems like it would make sense that specifying all the requirements of a particular piece of technology at the beginning of a project would reduce risk: in theory, government and the vendor would all know what they were required to deliver. The reality is that it is very difficult - if not impossible - to gather all the requirements of a new piece of technology before it is used. Once requirements are documented in an RFP, though, they become much harder (and expensive) to change, even when changes may be obvious to all those involved. In other words, [no plan survives contact with the enemy](https://en.wikiquote.org/wiki/Helmuth_von_Moltke_the_Elder), and requirements can and will change as soon as software starts to be used. 

### 5. Technology is bought using one size fits all contracts

Because governments have treated technology as a single entity, they have used a procurement approach where "one size fits all" contracts are used to deliver technology and services. This approach fails because the same fixed contract used for commodity or utility parts of a service that are known is also used for the new, changing parts that aren't known: customers end up with expensive changes and late deliverables. 

The [Wardley map](http://blog.gardeviance.org/2015/02/an-introduction-to-wardley-value-chain.html) below shows how a large government project includes one large contract covering parts of a service ranging from new ones that should be custom built through to ones that are products and can be rented and ones that can be treated as commodities or utilities. 

![A Wardley map showing the contract structure of a large government project. One large contract includes many parts of a service including those in genesis, custom-built, product/rental and commodity/utility stages of evolution. A smaller contract includes three utility items, and there are four single-item contracts.](/media/images/playbooks/technology-procurement/best-practices-less-ideal-contract-wardley.png "A less ideal contract structure")

> A [Wardley map](http://blog.gardeviance.org/2015/07/the-100-day-corporate-get-fit-plan.html) showing the contract structure of a large government project. One large contract includes many parts of a service including those in genesis, custom-built, product/rental and commodity/utility stages of evolution. 

## The result

These five attitudes (that government technology is special, that it must meet policy needs, that it has been aggressively outsourced, that it leads to undesirable surprises and that it can be bought using one size fits all contracts) describe the general approach to technology in government and explain why government hasn't seen the promised benefits of technology over the last few years.

---


## Further reading

* [Towards a More Agile Government](http://ben.balter.com/2011/11/29/towards-a-more-agile-government/) / “The Case for Rebooting Federal IT Procurement”, Ben Balter in 41 Pub. Cont. L.J. 149 The Public Contract Law Journal, Fall 2011
* [The Strategy is Delivery](http://mikebracken.com/blog/the-strategy-is-delivery-again/), Mike Bracken
* [On Policy and Delivery](http://mikebracken.com/blog/on-policy-and-delivery/), Mike Bracken
* [Better for Less](https://governmenttechnology.blog.gov.uk/2015/03/29/better-for-less/), Liam Maxwell
* [The Office of the Chief Technology Officer](https://governmenttechnology.blog.gov.uk/about-the-team/)
* [Digital Leadership](https://speakerdeck.com/kitcollingwood/digital-leadership-presentation), Kit Collingwood-Richardson
* [On Government, platform, purchasing and the commercial world](http://blog.gardeviance.org/2015/02/on-government-platform-purchasing-and.html), Simon Wardley
* [Towers of SIAM, trade associations and Civil Servants](http://blog.gardeviance.org/2015/03/towers-of-siam-trade-associations-and.html), Simon Wardley
* [The Towers of Salmon and Hungry Bears](http://blog.gardeviance.org/2015/03/the-towers-of-salmon-and-hungry-bears.html), Simon Wardley
* [Avoiding cloudfall: A systematic approach to cloud migration](https://18f.gsa.gov/2015/06/22/avoiding-cloudfall/), V David Zvenyach, Noah Kunin, Jay Finch, Ozzy Johnson, Mike Bland, and Chris Cairns, 18f
