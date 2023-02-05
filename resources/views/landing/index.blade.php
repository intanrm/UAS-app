@extends('layouts.landing')

@section('content')
  <section class="hero">
    <div class="container">
      <div class="grid lg:grid-cols-2 sm:grid-cols-1">
        <div class="flex items-center flex-col justify-center max-w-[700px]">
          <div class="mr-auto">
            <h1
              class="text-left text-hero text-[37px] sm:text-[64px] font-bold text-dark"
            >
              The Best <span class="text-primary">Products</span> With the Best
              Mentors
            </h1>
            <div>
              <p class="text-grey text-left mt-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                fermentum massa sit amet porta efficitur.
              </p>
            </div>

            <div class="mt-6 pt-5">
              <button class="btn-round">Register Now</button>
            </div>
          </div>
        </div>
        <div class="lg:block hidden">
          <div class="pt-6">
            <img src="{{ asset('images/hero.png') }}" class="hero-image" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="Products" class="py-10">
    <div class="container">
      <div class="flex flex-col lg:flex-row">
        <div class="max-w-[360px]">
          <h1 class="font-bold text-[22px] sm:text-[40px] text-dark">
            Find The Products You Want
          </h1>
        </div>
        <div class="max-w-[650px] lg:ml-auto">
          <p class="text-grey">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            fermentum massa sit amet porta efficitur.
          </p>
        </div>
      </div>
      <div class="grid lg:grid-cols-3 sm:grid-cols-1 mt-7 gap-7">
        @foreach ($Products as $Products )
        <div
          class="rounded-md bg-white bg-center bg-cover overflow-hidden"
          style="background-image: url({{ $Products->thumbnail }})"
        >
          <a href="{{ $Products->video }}" target="_blank">
            <div
              class="flex p-5 min-h-[220px] flex-col items-start gradient-buttom"
            >
              <div class="flex w-full">
                <span
                  class="bg-white rounded-3xl py-3 px-5 text-primary text-sm mr-auto"
                  ><b>${{ $Products->price }}</b>/Products</span
                >
                <span
                  class="rounded-3xl bg-slate-500 py-3 px-5 text-primary text-sm ml-auto"
                >
                  <i class="bx bxs-star text-yellow-400"></i>
                  <span class="text-yellow-400"> ({{ $Products->like }}) </span>
                </span>
              </div>
              <div class="mt-auto">
                <h5 class="text-white text-lg font-bold">
                 {{ $Products->title }}
                </h5>
              </div>
              <div class="flex w-full mt-2">
                <div class="text-sm mr-auto flex">
                  <img
                    src="{{ asset('images/user-1.png') }}"
                    class="max-h-[24px] max-w-[24px]"
                    alt=""
                  />
                  <div class="pl-3 text-white">
                    <span class="block text-sm">Admin</span>
                  </div>
                </div>
                <div class="text-sm ml-auto flex">
                  <span
                    class="h-[22px] w-[22px] bg-slate-500 rounded-full flex text-white justify-center items-center"
                  >
                    <i class="bx bx-play text-lg"></i>
                  </span>
                  <div class="pl-3 text-white">
                    <span class="block text-sm">1 Video</span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach

        
      </div>
      {{-- <div class="w-full justify-center mt-7 flex">
        <button class="btn-round font-bold">See Products</button>
      </div> --}}
    </div>
  </section>
  <section id="mentor" class="py-7">
    <div class="container">
      <div class="grid lg:grid-cols-2 sm:grid-cols-1">
        <div>
          <img
            src="{{ asset('images/metors.png') }}"
            class="max-w-[100%]"
            alt=""
          />
        </div>
        <div class="flex items-center flex-col justify-center mt-5 sm:mt-0">
          <div class="mr-auto">
            <h1
              class="text-[22px] sm:text-[40px] font-bold text-dark max-w-[364px]"
            >
              Mentors who are professional in their fields
            </h1>
            <p class="text-grey mt-10">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              fermentum massa sit amet porta efficitur.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="provide-user py-6">
    <div class="container">
      <div class="grid lg:grid-cols-2 sm:grid-cols-1">
        <div class="mr-auto max-w-[485px]">
          <h1 class="text-[22px] sm:text-[40px] font-bold text-dark">
            We will provide the best for our users from year to year
          </h1>
          <p class="text-grey mt-10">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            fermentum massa sit amet porta efficitur.
          </p>
          <ul class="grid grid-cols-2 max-w-[290px] mt-5">
            <li class="flex py-2">
              <span>
                <i
                  class="bx bxs-check-circle text-white-green text-[22px]"
                ></i>
              </span>
              <span class="font-bold text-dark ml-2 text-sm"
                >World Class</span
              >
            </li>
            <li class="flex py-2">
              <span>
                <i
                  class="bx bxs-check-circle text-white-green text-[22px]"
                ></i>
              </span>
              <span class="font-bold text-dark ml-2 text-sm">Flexible</span>
            </li>
            <li class="flex py-2">
              <span>
                <i
                  class="bx bxs-check-circle text-white-green text-[22px]"
                ></i>
              </span>
              <span class="font-bold text-dark ml-2 text-sm">Affordable</span>
            </li>
            <li class="flex py-2">
              <span>
                <i
                  class="bx bxs-check-circle text-white-green text-[22px]"
                ></i>
              </span>
              <span class="font-bold text-dark ml-2 text-sm"
                >Job Relevan</span
              >
            </li>
          </ul>

          <div class="mt-6">
            <button class="btn-round">Register Now</button>
          </div>
        </div>
        <div class="flex items-center w-full">
          <div id="best-product-chart" class="w-full"></div>
        </div>
      </div>
    </div>
  </section>
  <section id="trusted" class="py-8 bg-secondary">
    <div class="container py-7 pt-8">
      <div class="grid lg:grid-cols-2 md:grid-cols-1">
        <div class="flex items-center flex-col justify-center">
          <div class="max-w-[400px] mr-auto">
            <h1
              class="text-[22px] sm:text-[40px] font-bold text-dark max-w-[364px]"
            >
              Trusted by 20,000+ People
            </h1>
            <p class="text-grey mt-7">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              fermentum massa sit amet porta efficitur.
            </p>
          </div>
        </div>
        <div
          class="grid grid-rows-2 grid-cols-1 items-center justify-center sm:mt-8 lg:mt-0"
        >
          <div
            class="shadow-sm p-5 max-w-[350px] rounded-md bg-white relative z-10 sm:ml-[250px]"
          >

            <div class="flex">
              <div>
                <img
                  src="{{ $firstFeedback->avatar ?? '' }}"
                  class="h-[24px] w-[24px] object-cover rounded-full"
                  alt=""
                />
              </div>
              <div class="pl-3">
                <span class="font-bold text-dark block text-sm"
                  >{{ $firstFeedback->user_name ?? '' }}</span
                >
                <span class="text-grey text-sm">{{ $firstFeedback->user_role ?? '' }}</span>
              </div>
            </div>
            <span class="text-[40px] text-grey">“</span>
            <p class="text-sm text-grey mt-[-25px]">
              {{ $firstFeedback->content ?? '' }}
            </p>
            <ul class="mt-3 flex">

              @for ($i = 0; $i <  $firstFeedback->rate; $i++)
                <li class="mr-2">
                  <i class="bx bxs-star text-yellow-400"></i>
                </li>
              @endfor
              @for ($i = 5; $i >  $firstFeedback->rate; $i--)
                <li class="mr-2">
                  <i class="bx bxs-star text-gray-400"></i>
                </li>
              @endfor
            </ul>
          </div>

          <div
            class="shadow-sm p-5 max-w-[350px] rounded-md bg-white relative mt-5 sm:mt-[-40px]"
          >
          <div class="flex">
            <div>
              <img
                src="{{ $secondFeedback->avatar ?? '' }}"
                class="h-[24px] w-[24px] object-cover rounded-full"
                alt=""
              />
            </div>
            <div class="pl-3">
              <span class="font-bold text-dark block text-sm"
                >{{ $secondFeedback->user_name ?? '' }}</span
              >
              <span class="text-grey text-sm">{{ $secondFeedback->user_role ?? '' }}</span>
            </div>
          </div>
          <span class="text-[40px] text-grey">“</span>
          <p class="text-sm text-grey mt-[-25px]">
            {{ $secondFeedback->content ?? '' }}
          </p>
          <ul class="mt-3 flex">

            @for ($i = 0; $i <  $secondFeedback->rate; $i++)
              <li class="mr-2">
                <i class="bx bxs-star text-yellow-400"></i>
              </li>
            @endfor
            @for ($i = 5; $i >  $secondFeedback->rate; $i--)
              <li class="mr-2">
                <i class="bx bxs-star text-gray-400"></i>
              </li>
            @endfor
          </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="develop-quality" class="py-10 my-[10px]">
    <div class="container">
      <div class="w-full bg-secondary develop-bg rounded-lg p-5 sm:p-[80px]">
        <div class="grid lg:grid-cols-2 sm:grid-cols-1">
          <div>
            <div class="mr-auto max-w-[485px]">
              <h1 class="text-[22px] sm:text-[40px] font-bold text-dark">
                Develop Your Quality
              </h1>
              <p class="text-grey mt-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                fermentum massa sit amet porta efficitur.
              </p>
              <div class="mt-6">
                <button class="btn-round">Register Now</button>
              </div>
            </div>
          </div>
          <div class="sm:flex hidden">
            <div class="ml-auto">
              <img
                src="{{ asset('/images/develop-quality.png') }}"
                class="develip-quality-image object-contain"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection