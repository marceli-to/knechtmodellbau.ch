@props([
  'name', 
  'title' => null, 
  'email' => null, 
  'bio' => null,
  'captionClass' => null
])
 <div class="pt-16 {{ $captionClass }}">
  <h2 class="font-semi">
    {{ $name }}
  </h2>
  @if ($title)
    <div>
      {{ $title }}
    </div>
  @endif
  @if ($bio)
    <div>
      {{ $bio }}
    </div>
  @endif
  @if ($email)
    <div>
      <a 
        href="mailto:{{ $email }}"
        class="hover:underline underline-offset-2 decoration-1">
        {{ $email }}
      </a>
    </div>
  @endif
</div>
