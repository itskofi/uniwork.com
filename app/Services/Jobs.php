<?php

namespace App\Services;

class Jobs
{
	private Array $exampleJobs = [
		[
			"title" => "Web Developer",
			"salary" => "$60,000 - $80,000",
			"working_hours" => "Full-time",
			"place" => "New York, NY",
			"description" => "Develop and maintain web applications using PHP, HTML, CSS, and JavaScript.",
			"contact_person" => "John Smith",
			"company" => "Tech Solutions Inc.",
		],
		[
			"title" => "Graphic Designer",
			"salary" => "$45,000 - $60,000",
			"working_hours" => "Part-time",
			"place" => "Los Angeles, CA",
			"description" => "Create visually appealing graphics for marketing materials and websites.",
			"contact_person" => "Emily Johnson",
			"company" => "Creative Designs Co.",
		],
		[
			"title" => "Software Engineer",
			"salary" => "$80,000 - $100,000",
			"working_hours" => "Full-time",
			"place" => "San Francisco, CA",
			"description" => "Design and develop software solutions using PHP, Java, and Python.",
			"contact_person" => "Michael Davis",
			"company" => "Innovative Software Labs",
		],
		[
			"title" => "Digital Marketing Manager",
			"salary" => "$70,000 - $90,000",
			"working_hours" => "Full-time",
			"place" => "Chicago, IL",
			"description" => "Manage digital marketing campaigns, SEO, and social media strategies.",
			"contact_person" => "Sarah Wilson",
			"company" => "Digital Boost Marketing",
		],
		[
			"title" => "Customer Support Specialist",
			"salary" => "$35,000 - $45,000",
			"working_hours" => "Full-time",
			"place" => "Austin, TX",
			"description" => "Provide exceptional customer support via phone, email, and chat.",
			"contact_person" => "Alex Carter",
			"company" => "Support Solutions LLC",
		],
		[
			"title" => "Data Analyst",
			"salary" => "$55,000 - $75,000",
			"working_hours" => "Full-time",
			"place" => "Seattle, WA",
			"description" => "Analyze and interpret data to provide insights for business decision-making.",
			"contact_person" => "Maria Rodriguez",
			"company" => "Data Insights Inc.",
		],
		[
			"title" => "Sales Representative",
			"salary" => "$50,000 - $70,000",
			"working_hours" => "Full-time",
			"place" => "Miami, FL",
			"description" => "Drive sales through lead generation, client meetings, and relationship building.",
			"contact_person" => "James Turner",
			"company" => "SalesPro Solutions",
		],
		[
			"title" => "UX/UI Designer",
			"salary" => "$60,000 - $80,000",
			"working_hours" => "Full-time",
			"place" => "Denver, CO",
			"description" => "Design user-friendly interfaces and optimize user experiences.",
			"contact_person" => "Linda Parker",
			"company" => "UX Innovations",
		],
		[
			"title" => "HR Manager",
			"salary" => "$70,000 - $90,000",
			"working_hours" => "Full-time",
			"place" => "Philadelphia, PA",
			"description" => "Manage human resources activities, including recruitment and employee relations.",
			"contact_person" => "Robert Mitchell",
			"company" => "PeopleFirst Inc.",
		],
		[
			"title" => "Network Administrator",
			"salary" => "$65,000 - $85,000",
			"working_hours" => "Full-time",
			"place" => "Houston, TX",
			"description" => "Maintain and troubleshoot network infrastructure for optimal performance.",
			"contact_person" => "Karen Lee",
			"company" => "NetConnect Solutions",
		],
	];

	public function get() : Array
	{
		return $this->exampleJobs;
	}

  public function find($id) : Array
  {
    return $this->exampleJobs[$id];
  }
}
