<div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->original_title }}</p>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text"><strong>Date:</strong> {{ $movie->date }}</p>
                    <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                    <a href="{{ route('film.show', $movie->id) }}">Vedi dettagli</a>

                    

                </div>
            </div>