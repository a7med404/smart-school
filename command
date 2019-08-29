php artisan module:make Education
php artisan module:use Education

php artisan module:unuse User
php artisan module:use Education

php artisan module:migrate File


php artisan module:make-factory SubjectFactory
php artisan module:make-seed SubjectTableSeeder

php artisan module:make-request CreateSubjectRequest

php artisan module:make-resource SubjectResource --collection

php artisan module:make-model Subject --migration
php artisan module:make-controller SubjectController
php artisan module:make-controller API\SubjectController



php artisan module:migrate Education
php artisan module:seed

php artisan module:publish-migration
// the migration
php artisan module:migrate 
php artisan module:migrate Address
php artisan module:migrate Setting
php artisan module:migrate Student
php artisan module:migrate Employee
php artisan module:migrate Vehicle
php artisan module:migrate Education
php artisan migrate --path=/database/migrations/2019_07_19_225659_laratrust_setup_tables.php


/****************************************************************************************************************/
php artisan make:migration create_users_table --create=users

$table->boolean('confirmed');
$table->date('created_at');

$table->tinyInteger('votes');
$table->integer('votes');

$table->decimal('amount', 8, 2);
$table->float('amount', 8, 2);
$table->double('amount', 8, 2);
$table->enum('File', ['easy', 'hard']);

$table->string('name', 100);
$table->text('description');
$table->longText('description');

$table->softDeletes();

()->nullable()->unique();


$table->integer('user_id');
$table->foreign('user_id')->references('id')->on('users');

$table->foreign('user_id')
      ->references('id')->on('users')
      ->onDelete('cascade');

/****************************************************************************************************************/
return [
  'title' => 'required|unique:posts|max:255',
  'body' => 'required',
  'title' => 'bail|required|unique:posts|max:255',
  'body' => 'required',

  'title' => 'required|unique:posts|max:255',
  'author.name' => 'required',
  'author.description' => 'required',

  'publish_at' => 'nullable|date',

];


Accepted
Active URL
After (Date)
After Or Equal (Date)
Alpha
Alpha Dash
Alpha Numeric
Array
Bail
Before (Date)
Before Or Equal (Date)
Between
Boolean
Confirmed
Date
Date Equals
Date Format
Different
Digits
Digits Between
Dimensions (Image Files)
Distinct
E-Mail
Exists (Database)
File
Filled
Greater Than
Greater Than Or Equal
Image (File)
In
In Array
Integer
IP Address
JSON
Less Than
Less Than Or Equal
Max
MIME Types
MIME Type By File Extension
Min
Not In
Not Regex
Nullable
Numeric
Present
Regular Expression
Required
Required If
Required Unless
Required With
Required With All
Required Without
Required Without All
Same
Size
Sometimes
Starts With
String
Timezone
Unique (Database)
URL
UUID


public function attributes()
{
    return [
        'email' => 'email address',
    ];
}

Subjects = [
    'same'    => 'The :attribute and :other must match.',
    'size'    => 'The :attribute must be exactly :size.',
    'between' => 'The :attribute value :input is not between :min - :max.',
    'in'      => 'The :attribute must be one of the following types: :values',
];

use Illuminate\Validation\Rule;
Validator::make($data, [
    'email' => [
        'required',
        Rule::unique('users')->ignore($user->id),
    ],
]);


/**************************** Form *********************************/
<div class="row">
    <div class="ccol col-xl-12 col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['id' => 'name', 'class' => "form-control {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
        </div>
    </div>
</div>

<div class="col col-xl-6 col-lg-6 col-md-6">
    <div class="form-group">
        {!! Form::label('logo', 'Logo', ['class' => 'control-label']) !!}
        {!! Form::file('logo', null, ['id' => 'logo', 'class' => "form-control  {{ $errors->has('logo') ? ' is-invalid' : '' }}", 'value' => "{{ old('logo') }}", 'required', 'autofocus']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-3 custom-label-checkbox-radio">
        <div class="form-group">
            {!! Form::label('status', 'Status', ['class' => 'control-label']) !!} <br />
            {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Active</span> <br>
            {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span> 
        </div>
    </div>
</div>

<div class="col col-xl-4 col-lg-4 col-md-4">
    <div class="bootstrap-timepicker">
        <div class="form-group">
            {!! Form::label('date', 'تاريخ الرحلة', ['class' => 'control-label']) !!}
            <div class="input-group">
                {!! Form::text('date', null, ['id' => 'date', 'class' => "form-control  {{ $errors->has('date') ? ' is-invalid' : '' }}", 'value' => "{{ old('date') }}", 'required', 'autofocus']) !!}
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col col-xl-12 col-lg-12 col-md-12">
        <div class="form-group">
            {!! Form::label('company_id', 'الشركة', ['class' => 'control-label']) !!}
            {!! Form::select('company_id', getSelect('company'), null, ['id' => 'company_id', 'class' => "select2 form-control  {{ $errors->has('company_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('company_id') }}", 'required']) !!}
        </div>
    </div>
</div>

<div class="col-md-3 custom-label-checkbox-radio">
    <div class="form-group">
        {!! Form::label(role, display_name, ['class' => 'control-label']) !!} <br />
        {!! Form::checkbox('role', role, null, ['id' => role, 'class' => " {{ $errors->has('role') ? ' is-invalid' : '' }}", 'value' => "{{ old('role') }}"]) !!}
    </div>
</div>

<div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="form-group">
            {!! Form::label('note', 'Note', ['class' => 'control-label']) !!}
            {!! Form::textarea('note', null, ['id' => 'note', 'class' => "form-control  {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'autofocus']) !!}
        </div>
    </div>
</div>
