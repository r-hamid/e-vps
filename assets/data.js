const visaCategoryAndSubCategory = [
  {
    name: "Tourist Visa",
    value: "tourist",
    subCategories: [
      {
        name: "Single Entry",
        value: "single"
      },
      {
        name: "Multiple Entry",
        value: "multiple"
      },
    ],
  },
  {
    name: "Business Visa",
    value: "business",
    subCategories: [
      {
        name: "Single Visa",
        value: "single"
      },
      {
        name: "Multiple Visa",
        value: "multiple"
      },
      {
        name: "Project Visa",
        value: "project"
      }
    ],
  },
  {
    name: "Student Visa",
    value: "student",
    subCategories: [
      {
        name: "For studies in Pakistan",
        value: "study-in-pk"
      },
      {
        name: "Exchange Programs",
        value: "exchange"
      },
      {
        name: "Research Visa",
        value: "research"
      }
    ],
  },
  {
    name: "Family Visa",
    value: "family",
    subCategories: [
      {
        name: "Single Entry",
        value: "single"
      },
      {
        name: "Multiple Entry",
        value: "multiple"
      }
    ],
  },
  {
    name: "Transit Visa",
    value: "transit",
    subCategories: [
      {
        name: "Single Visa",
        value: "single"
      },
      {
        name: "Multiple Entry",
        value: "multiple"
      },
      {
        name: "For Travels Passing through Pakistan",
        value: "passing_through"
      },
    ]
  },
  {
    name: "Journalist Visa",
    value: "journalist",
    subCategories: [
      {
        name: "Short-term Assignment",
        value: "short-term"
      },
      {
        name: "Long-term Assignment",
        value: "long-term"
      }
    ],
  },
  {
    name: "NGO/INGO Visa",
    value: "ngo",
    subCategories: [
      {
        name: "Short-term Assignment",
        value: "short-term"
      },
      {
        name: "Long-term Assignment",
        value: "long-term"
      }
    ],
  },
  {
    name: "Religious Visa",
    value: "religous",
    subCategories: [
      {
        name: "Pilgrimage (Ziyarat)",
        value: "ziyarat"
      },
      {
        name: "Religious Visa",
        value: "religous",
      }
    ]
  },
  {
    name: "Diplomatic Visa",
    value: "diplomatic",
    subCategories: [
      {
        name: "Diplomats Visa",
        value: "diplomats"
      },
      {
        name: "Foreign Governament Officials",
        value: "foreign_officials"
      }
    ],
  },
  {
    name: "Visa on Arrival",
    value: "on_arrival",
    subCategories: [
      {
        name: "Tourism",
        value: "tourism"
      },
      {
        name: "Business",
        value: "business"
      },
      {
        name: "Family Visit",
        value: "family"
      }
    ],
  },
  {
    name: "Visa Extension",
    value: "extension_visa",
    subCategories: [
      {
        name: "Tourist Visa Extension",
        value: "tourist_extension"
      },
      {
        name: "Business Visa Extension",
        value: "business_extension"
      },
      {
        name: "Student Visa Extension",
        value: "student_extension"
      }
    ],
  }
];

const countriesNameList = [
	"Afghanistan",
	"Albania",
	"Algeria",
	"American Samoa",
	"Andorra",
	"Angola",
	"Anguilla",
	"Antarctica",
	"Antigua and Barbuda",
	"Argentina",
	"Armenia",
	"Aruba",
	"Australia",
	"Austria",
	"Azerbaijan",
	"Bahamas",
	"Bahrain",
	"Bangladesh",
	"Barbados",
	"Belarus",
	"Belgium",
	"Belize",
	"Benin",
	"Bermuda",
	"Bhutan",
	"Bolivia (Plurinational State of)",
	"Bonaire, Sint Eustatius and Saba",
	"Bosnia and Herzegovina",
	"Botswana",
	"Bouvet Island",
	"Brazil",
	"British Indian Ocean Territory",
	"Brunei Darussalam",
	"Bulgaria",
	"Burkina Faso",
	"Burundi",
	"Cabo Verde",
	"Cambodia",
	"Cameroon",
	"Canada",
	"Cayman Islands",
	"Central African Republic",
	"Chad",
	"Chile",
	"China",
	"Christmas Island",
	"Cocos (Keeling) Islands",
	"Colombia",
	"Comoros",
	"Congo (the Democratic Republic of the)",
	"Congo",
	"Cook Islands",
	"Costa Rica",
	"Croatia",
	"Cuba",
	"Curaçao",
	"Cyprus",
	"Czechia",
	"Côte d'Ivoire",
	"Denmark",
	"Djibouti",
	"Dominica",
	"Dominican Republic",
	"Ecuador",
	"Egypt",
	"El Salvador",
	"Equatorial Guinea",
	"Eritrea",
	"Estonia",
	"Eswatini",
	"Ethiopia",
	"Falkland Islands [Malvinas]",
	"Faroe Islands",
	"Fiji",
	"Finland",
	"France",
	"French Guiana",
	"French Polynesia",
	"French Southern Territories",
	"Gabon",
	"Gambia",
	"Georgia",
	"Germany",
	"Ghana",
	"Gibraltar",
	"Greece",
	"Greenland",
	"Grenada",
	"Guadeloupe",
	"Guam",
	"Guatemala",
	"Guernsey",
	"Guinea",
	"Guinea-Bissau",
	"Guyana",
	"Haiti",
	"Heard Island and McDonald Islands",
	"Holy See",
	"Honduras",
	"Hong Kong",
	"Hungary",
	"Iceland",
	"India",
	"Indonesia",
	"Iran (Islamic Republic of)",
	"Iraq",
	"Ireland",
	"Isle of Man",
	"Italy",
	"Jamaica",
	"Japan",
	"Jersey",
	"Jordan",
	"Kazakhstan",
	"Kenya",
	"Kiribati",
	"Korea (the Democratic People's Republic of)",
	"Korea (the Republic of)",
	"Kuwait",
	"Kyrgyzstan",
	"Lao People's Democratic Republic",
	"Latvia",
	"Lebanon",
	"Lesotho",
	"Liberia",
	"Libya",
	"Liechtenstein",
	"Lithuania",
	"Luxembourg",
	"Macao",
	"Madagascar",
	"Malawi",
	"Malaysia",
	"Maldives",
	"Mali",
	"Malta",
	"Marshall Islands",
	"Martinique",
	"Mauritania",
	"Mauritius",
	"Mayotte",
	"Mexico",
	"Micronesia (Federated States of)",
	"Moldova (the Republic of)",
	"Monaco",
	"Mongolia",
	"Montenegro",
	"Montserrat",
	"Morocco",
	"Mozambique",
	"Myanmar",
	"Namibia",
	"Nauru",
	"Nepal",
	"Netherlands",
	"New Caledonia",
	"New Zealand",
	"Nicaragua",
	"Niger",
	"Nigeria",
	"Niue",
	"Norfolk Island",
	"Northern Mariana Islands",
	"Norway",
	"Oman",
	"Palau",
	"Palestine, State of",
	"Panama",
	"Papua New Guinea",
	"Paraguay",
	"Peru",
	"Philippines",
	"Pitcairn",
	"Poland",
	"Portugal",
	"Puerto Rico",
	"Qatar",
	"Republic of North Macedonia",
	"Romania",
	"Russian Federation",
	"Rwanda",
	"Réunion",
	"Saint Barthélemy",
	"Saint Helena, Ascension and Tristan da Cunha",
	"Saint Kitts and Nevis",
	"Saint Lucia",
	"Saint Martin (French part)",
	"Saint Pierre and Miquelon",
	"Saint Vincent and the Grenadines",
	"Samoa",
	"San Marino",
	"Sao Tome and Principe",
	"Saudi Arabia",
	"Senegal",
	"Serbia",
	"Seychelles",
	"Sierra Leone",
	"Singapore",
	"Sint Maarten (Dutch part)",
	"Slovakia",
	"Slovenia",
	"Solomon Islands",
	"Somalia",
	"South Africa",
	"South Georgia and the South Sandwich Islands",
	"South Sudan",
	"Spain",
	"Sri Lanka",
	"Sudan",
	"Suriname",
	"Svalbard and Jan Mayen",
	"Sweden",
	"Switzerland",
	"Syrian Arab Republic",
	"Taiwan",
	"Tajikistan",
	"Tanzania, United Republic of",
	"Thailand",
	"Timor-Leste",
	"Togo",
	"Tokelau",
	"Tonga",
	"Trinidad and Tobago",
	"Tunisia",
	"Turkey",
	"Turkmenistan",
	"Turks and Caicos Islands",
	"Tuvalu",
	"Uganda",
	"Ukraine",
	"United Arab Emirates",
	"United Kingdom of Great Britain and Northern Ireland",
	"United States Minor Outlying Islands",
	"United States of America",
	"Uruguay",
	"Uzbekistan",
	"Vanuatu",
	"Venezuela (Bolivarian Republic of)",
	"Viet Nam",
	"Virgin Islands (British)",
	"Virgin Islands (U.S.)",
	"Wallis and Futuna",
	"Western Sahara",
	"Yemen",
	"Zambia",
	"Zimbabwe",
	"Åland Islands"
];
