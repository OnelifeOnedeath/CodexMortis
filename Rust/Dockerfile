FROM rust:alpine
WORKDIR /app
COPY . .
RUN cd scutum && cargo build --release
CMD ["./scutum/target/release/scutum"]
