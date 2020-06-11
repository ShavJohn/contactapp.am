<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'address', 'email', 'website'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}

/*
Company::all()
Company::take(3)->get()
Company::first()
Company::find(1)
Company::find([1, 2, 3])
Company::where('website', 'kreiger.net')->first()
Company::whereWebsite('kreiger.net')->first()

# create new record

$company = new Company()
$company->name = "My company"
$company->address = "My Address"
$company->email = "mycompany@test.com"
$company->website = "mywebsite.com"
$company->save()

# update
$company->website = "mywebsitecompany.com"
$company->save()

# delete record
$company = Company::find(1)

$company->delete()
Company::destroy(11)
Company::destroy([7, 8, 9])




# Mass assignment

# create

$data = [
    "name" => "Company 3",
    "address" => "Address company 3",
    "email" => "company3@email.com",
    "website" => "https://company3.com",
    "contact" => "contact company 3"
];
Company::create($data)

## update
$company = Company::first()
$company->update($data)




#1
php artisan tinker
use App\Contact
use App\Company
$company = Company::first()
$contact_1 = new Contact
$contact_1->first_name = "Al"
$contact_1->last_name = "Pacino"
$contact_1->email = "alpacino@gmail.com"
$contact_1->address = "Address Al Pacino"
$contact_1->company_id = $company->id
$contact_1->save()

$contact_2 = new Contact
$contact_2->first_name = "Kim"
$contact_2->last_name = "Basinger"
$contact_2->email = "kimbasinger@gmail.com"
$contact_2->address = "Address Kim Basinger"
$company->contacts()->save($contact_2)

remove all 3 rows in contacts table

$contact_1 = new Contact
$contact_1->first_name = "Al"
$contact_1->last_name = "Pacino"
$contact_1->email = "alpacino@gmail.com"
$contact_1->address = "Address Al Pacino"

$contact_2 = new Contact
$contact_2->first_name = "Kim"
$contact_2->last_name = "Basinger"
$contact_2->email = "kimbasinger@gmail.com"
$contact_2->address = "Address Kim Basinger"

$contacts = [$contact_1, $contact_2]
$company->contacts()->saveMany($contacts)

$contact_3 = [
    "first_name" => "Denzel",
    "last_name" => "Washington",
    "email" => "denzelwashington@gmail.com",
    "address" => "Address denzel washington"
]
$company->contacts()->create($contact_3)

mass assignment error
add Fillable property
$company->contacts()->create($contact_3)

remove all 3 rows in contacts table

$contact_1 = [
    "first_name" => "Denzel",
    "last_name" => "Washington",
    "email" => "denzelwashington@gmail.com",
    "address" => "Address denzel washington"
]

$contact_2 = [
    "first_name" => "Al",
    "last_name" => "Pacino",
    "email" => "alpacino@gmail.com",
    "address" => "Address Al Pacino"
]

$contacts = [$contact_1, $contact_2]
$company->contacts()->createMany($contacts)

# retrive contact data from company model

$company->contacts()
$company->contacts()->get()


$company->contacts()->find(7)

$company->contacts()->orderBy('id', 'desc')->first()
$company->contacts()->orderBy('id', 'asc')->first()
$company->contacts

$contact = Contact::first()
$contact->company()
$contact->company
$contact->company()->first()
$contact->company->name




$company->contacts()->first()
$company->contacts()->first()->delete()
$company->contacts()->delete()

$company->contacts()  # bazayum chka bayc modelum ka
$company->load('contacts')

*/
