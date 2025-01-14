<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Lets find Your next job!</h1>
            <form action="" class="">
                <input type="text" name="" id="" placeholder="I'm looking for" class="mt-4  rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                <x-job-card :$job/>
                @endforeach
              
               
            </div>

        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2">
                @foreach ($tags as $tag)
                <x-tag size='base' :$tag/>
                @endforeach
               

            </div>

        </section>
        <section>
            <x-section-heading>Recent jobs</x-section-heading>
            <div class=" mt-6 space-y-5">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job/>
                @endforeach
               

            </div>

        </section>
    </div>
</x-layout>
