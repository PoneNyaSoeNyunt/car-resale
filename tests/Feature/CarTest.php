<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

it('should not be possible to access car create page as guest user', function () {
    $response = $this->get(route('car.create'));
    $response->assertRedirectToRoute('login');
    $response->assertStatus(302);
});

it('should be possible to access car create page as authenticated user', function () {
    $user = \App\Models\User::factory()->create();
    $response = $this->actingAs($user)->get(route('car.create'));

    $response->assertOk()->assertSee("Add new car");
});