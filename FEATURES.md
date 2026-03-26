# Doctrine Templates Features

Functional definition for `softspring/doctrine-templates`.

This file defines the expected behavior and scope of the component.

## Purpose

- Provide reusable Doctrine-oriented building blocks for common entity fields and embeddable value objects.
- Reduce duplication in applications that repeatedly model identifiers, timestamps, names, slugs, addresses, or contact-card style data.

## Main Features

- Provide reusable embeddable models such as `Address`, `HAddress`, and `HCard`.
- Provide reusable entity traits for common identifiers and timestamps.
- Provide reusable entity traits for small business fields such as `name`, `slug`, `currency`, and address parts.
- Provide Symfony form types for editing address and contact-card structures.
- Keep the package usable as a set of composable templates rather than as one fixed persistence model.

## Expected Usage

- Use embeddables when an application wants to persist structured address or contact-card data inside an entity.
- Use traits when an entity needs a standard `id`, `name`, `slug`, or timestamp implementation.
- Use the provided form types when applications want a matching Symfony form layer for those embeddables.
- Combine only the traits and embeddables that fit the target entity instead of treating the package as an all-or-nothing model layer.

## Operational Expectations

- Address-related form types should expose predictable fields and useful browser autocomplete attributes.
- Traits should stay small, explicit, and easy to audit.
- The package should remain framework-friendly for Symfony and Doctrine projects without forcing a larger abstraction layer.

## Current Limits

- The package provides templates and helpers, not full entity lifecycle orchestration.
- Different traits represent alternative modeling choices and should not be mixed blindly.
- Applications still need to decide their own validation rules, lifecycle strategy, and domain-specific constraints.
